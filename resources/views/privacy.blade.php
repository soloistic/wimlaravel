@extends('layouts.app')

@section('title', 'Privacy Policy - Word Increase Ministries')
@section('description', 'Our privacy policy and data protection information')

@section('content')
<!-- Hero Section -->
<div class="relative overflow-hidden bg-brand-900 border-b border-brand-800/30">
    <div class="absolute -top-40 -right-40 w-96 h-96 rounded-full bg-brand-600/20 blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 rounded-full bg-orange-500/10 blur-3xl pointer-events-none">
    </div>

    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
        <h1 class="text-4xl md:text-6xl font-bold font-serif text-white mb-6">Privacy Policy</h1>
        <p class="text-xl text-brand-100/90 max-w-3xl mx-auto font-light leading-relaxed">
            Your privacy is important to us. Here's how we protect your data.
        </p>
    </div>
</div>

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8 md:p-12">
        <div class="prose prose-lg max-w-none">
            <p class="text-gray-500 mb-8 border-b border-gray-100 pb-6">
                <strong class="text-gray-700">Last updated:</strong> March 28, 2026
            </p>

            <h2 class="text-2xl font-bold font-serif text-gray-900 mt-10 mb-5">1. Information We Collect</h2>
            <p class="text-gray-600 mb-5 leading-relaxed">
                <strong>Information You Provide to Us:</strong> We collect information you provide directly to us, such
                as when you contact us through our website or mobile application. This may include your name, email
                address, phone number, and any messages you send us.
            </p>
            <p class="text-gray-600 mb-5 leading-relaxed">
                <strong>Automatically Collected Information:</strong> When you use our mobile application, we or our
                third-party service providers may automatically collect certain information such as your device type,
                operating system, unique device identifiers, IP address, and app usage data (including crash reports and
                performance data) to help us ensure the app functions correctly.
            </p>

            <h2 class="text-2xl font-bold font-serif text-gray-900 mt-10 mb-5">2. How We Use Your Information</h2>
            <p class="text-gray-600 mb-5 leading-relaxed">
                We use the information we collect to:
            </p>
            <ul class="list-disc list-inside text-gray-600 mb-5 space-y-3 marker:text-brand-500">
                <li>Operate, maintain, and improve our website and mobile application</li>
                <li>Respond to your inquiries and provide customer support</li>
                <li>Send you updates, newsletters, and push notifications (if you opt-in)</li>
                <li>Analyze usage trends and fix technical issues within the app</li>
                <li>Comply with legal obligations</li>
            </ul>

            <h2 class="text-2xl font-bold font-serif text-gray-900 mt-10 mb-5">3. Information Sharing</h2>
            <p class="text-gray-600 mb-5 leading-relaxed">
                We do not sell, trade, or otherwise transfer your personal information to third parties without your
                consent,
                except as described in this privacy policy. We may share your information in the following
                circumstances:
            </p>
            <ul class="list-disc list-inside text-gray-600 mb-5 space-y-3 marker:text-brand-500">
                <li>With your explicit consent</li>
                <li>To comply with legal requirements</li>
                <li>To protect our rights and prevent fraud</li>
                <li>With service providers who assist us in operating our website</li>
            </ul>

            <h2 class="text-2xl font-bold font-serif text-gray-900 mt-10 mb-5">4. Data Security</h2>
            <p class="text-gray-600 mb-5 leading-relaxed">
                We implement appropriate security measures to protect your personal information against unauthorized
                access,
                alteration, disclosure, or destruction. However, no method of transmission over the internet or
                electronic
                storage is 100% secure.
            </p>

            <h2 class="text-2xl font-bold font-serif text-gray-900 mt-10 mb-5">5. Cookies and Tracking</h2>
            <p class="text-gray-600 mb-5 leading-relaxed">
                Our website may use cookies and similar tracking technologies to enhance your browsing experience.
                You can control cookie settings through your browser preferences.
            </p>

            <h2 class="text-2xl font-bold font-serif text-gray-900 mt-10 mb-5">6. Third-Party Links</h2>
            <p class="text-gray-600 mb-5 leading-relaxed">
                Our website may contain links to third-party websites. We are not responsible for the privacy practices
                or content of these external sites. We encourage you to review their privacy policies.
            </p>

            <h2 class="text-2xl font-bold font-serif text-gray-900 mt-10 mb-5">7. Your Rights & Data Deletion</h2>
            <p class="text-gray-600 mb-5 leading-relaxed">
                Depending on your location, you may have certain rights regarding your personal information, including
                the right to access, correct, or restrict your data.
            </p>
            <p class="text-gray-600 mb-5 leading-relaxed font-semibold text-brand-700">
                Requesting Data Deletion:
            </p>
            <p class="text-gray-600 mb-5 leading-relaxed">
                If you wish to have your personal data deleted from our systems, please send an email to
                <strong>wordincreaseministry@gmail.com</strong> with the subject line "Data Deletion Request." We will
                promptly review and process your request in accordance with applicable laws.
            </p>

            <h2 class="text-2xl font-bold font-serif text-gray-900 mt-10 mb-5">8. Children's Privacy</h2>
            <p class="text-gray-600 mb-5 leading-relaxed">
                Our services are not directed to children under 13 years of age. We do not knowingly collect personal
                information from children under 13. If we become aware that we have collected personal information
                from a child under 13, we will take steps to delete such information.
            </p>

            <h2 class="text-2xl font-bold font-serif text-gray-900 mt-10 mb-5">9. Changes to This Policy</h2>
            <p class="text-gray-600 mb-5 leading-relaxed">
                We may update this privacy policy from time to time. We will notify you of any changes by posting the
                new privacy policy on this page and updating the "Last updated" date.
            </p>

            <h2 class="text-2xl font-bold font-serif text-gray-900 mt-10 mb-5">10. Contact Us</h2>
            <p class="text-gray-600 mb-5 leading-relaxed">
                If you have any questions about this privacy policy or our data practices, please contact us:
            </p>
            <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100 mt-6">
                <p class="text-gray-600 mb-3 flex flex-wrap items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-500 shrink-0" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <strong>Email:</strong> <a href="mailto:wordincreaseministry@gmail.com"
                        class="text-brand-600 hover:text-brand-700 font-medium break-all">wordincreaseministry@gmail.com</a>
                </p>

                <p class="text-gray-600 flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <strong>Phone:</strong> +234 813 932 3232
                </p>
            </div>
        </div>
    </div>
</div>
@endsection