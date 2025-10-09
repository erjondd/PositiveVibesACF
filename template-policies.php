<?php
/* Template Name: Policies Template */
get_header();
?>

<section class="another-heroes">
    <div class="container">
        <div class="title module">Policies</div>
    </div>
</section>

<section class="policies-section">
    <div class="container">
        <div class="policies-buttons">
            <a class="policy-btn" href="https://positivevibes.org.au/wp-content/uploads/2024/01/Code-of-Conduct-Jan-2024.pdf" target="_blank" rel="noopener noreferrer">
                Code of Conduct (Jan 2024)
            </a>

            <a class="policy-btn" href="https://positivevibes.org.au/wp-content/uploads/2022/12/Complaints-Policy-December-2022.pdf" target="_blank" rel="noopener noreferrer">
                Complaints Policy (Dec 2022)
            </a>

            <a class="policy-btn" href="https://positivevibes.org.au/wp-content/uploads/2022/12/Complaint-Form.pdf" target="_blank" rel="noopener noreferrer">
                Complaint Form
            </a>
        </div>

        <div class="privacy-policy">
            <h2>Privacy Policy</h2>

            <p>Positive Vibes Foundation is committed to providing quality services to you and this policy outlines our ongoing obligations to you in respect of how we manage your Personal Information.</p>

            <p>We have adopted the Australian Privacy Principles (APPs) contained in the Privacy Act 1988 (Cth) (the Privacy Act). The NPPs govern the way in which we collect, use, disclose, store, secure and dispose of your Personal Information.</p>

            <p>A copy of the Australian Privacy Principles may be obtained from the website of The Office of the Australian Information Commissioner at <a href="https://www.oaic.gov.au" target="_blank">www.oaic.gov.au</a></p>

            <h3>What is Personal Information and why do we collect it?</h3>
            <p>Personal Information is information or an opinion that identifies an individual. Examples of Personal Information we collect include: names, addresses, email addresses, phone numbers.</p>

            <p>This Personal Information is obtained in many ways including interviews, correspondence, by telephone and facsimile, by email, via our website <a href="https://positivevibes.org.au">www.positivevibes.org.au</a>, from your website, from media and publications, from other publicly available sources, from cookies and from third parties. We don’t guarantee website links or policy of authorised third parties.</p>

            <p>We collect your Personal Information for the primary purpose of providing our services to you, providing information to our clients and marketing. We may also use your Personal Information for secondary purposes closely related to the primary purpose, in circumstances where you would reasonably expect such use or disclosure. You may unsubscribe from our mailing/marketing lists at any time by contacting us in writing.</p>

            <h3>Sensitive Information</h3>
            <p>Sensitive information is defined in the Privacy Act to include information or opinion about such things as an individual’s racial or ethnic origin, political opinions, membership of a political association, religious or philosophical beliefs, membership of a trade union or other professional body, criminal record or health information.</p>

            <p>Sensitive information will be used by us only:</p>
            <ul>
                <li>For the primary purpose for which it was obtained</li>
                <li>For a secondary purpose that is directly related to the primary purpose</li>
                <li>With your consent; or where required or authorised by law.</li>
            </ul>

            <h3>Third Parties</h3>
            <p>Where reasonable and practicable to do so, we will collect your Personal Information only from you. However, in some circumstances we may be provided with information by third parties. In such a case we will take reasonable steps to ensure that you are made aware of the information provided to us by the third party.</p>

            <h3>Disclosure of Personal Information</h3>
            <p>Your Personal Information may be disclosed in a number of circumstances including the following:</p>
            <ul>
                <li>Third parties where you consent to the use or disclosure; and</li>
                <li>Where required or authorised by law.</li>
            </ul>

            <h3>Security of Personal Information</h3>
            <p>Your Personal Information is stored in a manner that reasonably protects it from misuse and loss and from unauthorized access, modification or disclosure.</p>

            <p>When your Personal Information is no longer needed for the purpose for which it was obtained, we will take reasonable steps to destroy or permanently de-identify your Personal Information. However, most of the Personal Information is or will be stored in client files which will be kept by us for a minimum of 7 years.</p>

            <h3>Access to your Personal Information</h3>
            <p>You may access the Personal Information we hold about you and to update and/or correct it, subject to certain exceptions. If you wish to access your Personal Information, please contact us in writing.</p>

            <p>Positive Vibes Foundation will not charge any fee for your access request, but may charge an administrative fee for providing a copy of your Personal Information.</p>

            <p>In order to protect your Personal Information we may require identification from you before releasing the requested information.</p>

            <h3>Maintaining the Quality of your Personal Information</h3>
            <p>It is an important to us that your Personal Information is up to date. We will take reasonable steps to make sure that your Personal Information is accurate, complete and up-to-date. If you find that the information we have is not up to date or is inaccurate, please advise us as soon as practicable so we can update our records and ensure we can continue to provide quality services to you.</p>

            <h3>Policy Updates</h3>
            <p>This Policy may change from time to time and is available on our website.</p>

            <h3>Privacy Policy Complaints and Enquiries</h3>
            <p>If you have any queries or complaints about our Privacy Policy please contact us at:</p>

            <address>
                Positive Vibes Foundation<br>
                Building 32, Balcombe Heights Estate,<br>
                92 Seven Hills Road,<br>
                Baulkham Hills NSW, 2153.<br>
                <a href="mailto:info@positivevibes.org.au">info@positivevibes.org.au</a>
            </address>
        </div>
    </div>
</section>

<style>
    .policies-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin: 40px 0;
    }

    .policy-btn {
        display: inline-block;
        padding: 14px 24px;
        background-color: #0073aa;
        color: #fff;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 600;
        transition: background 0.2s ease;
    }

    .policy-btn:hover {
        background-color: #005c88;

    }

    .policy-btn:hover a {
        color: white;
    }

    .privacy-policy {
        line-height: 1.7;
        color: #333;
    }

    .privacy-policy h2,
    .privacy-policy h3 {
        margin-top: 30px;
        color: #111;
    }

    .privacy-policy ul {
        margin-left: 20px;
        list-style-type: disc;
    }
</style>

<?php get_footer(); ?>