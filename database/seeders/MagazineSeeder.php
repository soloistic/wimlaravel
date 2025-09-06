<?php

namespace Database\Seeders;

use App\Models\Pdf;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class MagazineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Use the console output to provide feedback during seeding.
        $output = $this->command->getOutput();

        $this->command->info('Starting magazine import from seeder...');

        // Define paths relative to storage/app/
        $pdfPath = 'public/pdfs';
        $thumbnailPath = 'public/thumbnails';

        $pdfFiles = File::files(storage_path('app/' . $pdfPath));

        if (empty($pdfFiles)) {
            $this->command->error('No PDF files found in storage/app/' . $pdfPath);
            return;
        }

        $this->command->info(count($pdfFiles) . ' PDF files found. Starting import...');

        $progressBar = $output->createProgressBar(count($pdfFiles));
        $progressBar->start();

        foreach ($pdfFiles as $pdfFile) {

            $pdfFileName = $pdfFile->getFilename();
            $baseName = $pdfFile->getFilenameWithoutExtension();

            // Skip if a PDF with this URL already exists to prevent duplicates
            if (Pdf::where('pdf_url', 'pdfs/' . $pdfFileName)->exists()) {
                $progressBar->advance();
                continue;
            }

            // Find a matching thumbnail (jpg, jpeg, png, webp)
            $thumbnailUrl = $this->findThumbnail($thumbnailPath, $baseName);

            if (!$thumbnailUrl) {
                Log::warning("No thumbnail found for {$pdfFileName}. Skipping.");
                $progressBar->advance();
                continue;
            }

            Pdf::create([
                'title' => Str::title(str_replace(['-', '_'], ' ', $baseName)),
                'pdf_url' => 'pdfs/' . $pdfFileName,
                'thumbnail_url' => 'thumbnails/' . basename($thumbnailUrl),
                'published_at' => Carbon::parse(substr($baseName, -7))->startOfMonth() ?? Carbon::now(), // Example: Extracts date from 'magazine-2025-01'
            ]);
            $progressBar->advance();
        }

        $progressBar->finish();
        $this->command->info("\nMagazine import complete!");
    }

    private function findThumbnail(string $thumbnailPath, string $baseName): ?string
    {
        $extensions = ['jpg', 'jpeg', 'png', 'webp'];
        foreach ($extensions as $extension) {
            $thumbnailFile = storage_path('app/' . $thumbnailPath . '/' . $baseName . '.' . $extension);
            if (File::exists($thumbnailFile)) {
                return $thumbnailFile;
            }
        }

        return null;
    }
}
