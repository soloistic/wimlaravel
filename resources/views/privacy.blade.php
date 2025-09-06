@extends('layouts.app')

@section('title', 'Privacy Policy - Word Increase Ministries')
@section('description', 'Our privacy policy and data protection information')

@section('content')
<!-- Hero Section -->
<div class="bg-orange-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
        <h1 class="text-4xl font-bold text-white mb-4">Privacy Policy</h1>
        <p class="text-xl text-white max-w-3xl mx-auto">
            Your privacy is important to us. Here's how we protect your data.
        </p>
    </div>
</div>

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <div class="prose prose-lg max-w-none">
            <p class="text-gray-600 mb-6">
                <strong>Last updated:</strong> {{ date('F j, Y') }}
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">1. Information We Collect</h2>
            <p class="text-gray-700 mb-4">
                We collect information you provide directly to us, such as when you contact us through our website.
                This may include your name, email address, and any messages you send us.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">2. How We Use Your Information</h2>
            <p class="text-gray-700 mb-4">
                We use the information we collect to:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-4 space-y-2">
                <li>Respond to your inquiries and provide customer support</li>
                <li>Send you updates about our Word Increase Ministries (if you opt-in)</li>
                <li>Improve our website and services</li>
                <li>Comply with legal obligations</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">3. Information Sharing</h2>
            <p class="text-gray-700 mb-4">
                We do not sell, trade, or otherwise transfer your personal information to third parties without your consent,
                except as described in this privacy policy. We may share your information in the following circumstances:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-4 space-y-2">
                <li>With your explicit consent</li>
                <li>To comply with legal requirements</li>
                <li>To protect our rights and prevent fraud</li>
                <li>With service providers who assist us in operating our website</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">4. Data Security</h2>
            <p class="text-gray-700 mb-4">
                We implement appropriate security measures to protect your personal information against unauthorized access,
                alteration, disclosure, or destruction. However, no method of transmission over the internet or electronic
                storage is 100% secure.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">5. Cookies and Tracking</h2>
            <p class="text-gray-700 mb-4">
                Our website may use cookies and similar tracking technologies to enhance your browsing experience.
                You can control cookie settings through your browser preferences.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">6. Third-Party Links</h2>
            <p class="text-gray-700 mb-4">
                Our website may contain links to third-party websites. We are not responsible for the privacy practices
                or content of these external sites. We encourage you to review their privacy policies.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">7. Your Rights</h2>
            <p class="text-gray-700 mb-4">
                Depending on your location, you may have certain rights regarding your personal information, including:
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-4 space-y-2">
                <li>The right to access your personal information</li>
                <li>The right to correct inaccurate information</li>
                <li>The right to delete your personal information</li>
                <li>The right to restrict processing of your information</li>
                <li>The right to data portability</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">8. Children's Privacy</h2>
            <p class="text-gray-700 mb-4">
                Our services are not directed to children under 13 years of age. We do not knowingly collect personal
                information from children under 13. If we become aware that we have collected personal information
                from a child under 13, we will take steps to delete such information.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">9. Changes to This Policy</h2>
            <p class="text-gray-700 mb-4">
                We may update this privacy policy from time to time. We will notify you of any changes by posting the
                new privacy policy on this page and updating the "Last updated" date.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-8 mb-4">10. Contact Us</h2>
            <p class="text-gray-700 mb-4">
                If you have any questions about this privacy policy or our data practices, please contact us:
            </p>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="text-gray-700 mb-2">
                    <strong>Email:</strong> privacy@magazinecollection.com
                </p>
                <p class="text-gray-700 mb-2">
                    <strong>Address:</strong> 123 Magazine Street, Publishing City, PC 12345, United States
                </p>
                <p class="text-gray-700">
                    <strong>Phone:</strong> +1 (555) 123-4567
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
