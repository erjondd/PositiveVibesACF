<?php

/**
 * Template Name: Private Page
 */
get_header();

// Set your password
$private_password = 'Pvf2153!!';

if (isset($_POST['post_password'])) {
    if ($_POST['post_password'] === $private_password) {
        // Correct password: show page content
?>
        <div class="special">
            <section class="another-heroes">
                <div class="container">
                    <div class="title module">Private</div>
                    <div class="content module">
                        <!-- Your private content goes here -->
                        <p>Welcome! You have access to this private content.</p>
                    </div>
                </div>
            </section>
            <div class="container">

                <section>
                    <h2>Regulatory Documents, Certificates, Contracts</h2>
                    <ul>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2022/10/ACNC-Certificate.pdf">ACNC Certificate</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2025/07/Trademark_PVF.jpeg">Positive Vibes Foundation - Name Trademark</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2022/12/PVF-Certificate-of-Registration.pdf">PFV Registration Certificate</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2024/07/Certificate-of-Currency-2024-Positive-Vibes-Foundation-Ltd-596850.pdf">Insurance Certificate of Currency to 22 June 2025</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2022/10/CFN-23903.pdf">Charitable Fundraising Number (CFN) 27 July 2027</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2022/10/Optus-Internet-Contract.pdf">Optus Internet Contract</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2022/10/Constitution_PositiveVibesFoundationLtd.pdf">PVF Constitution</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2022/10/Deed-of-Variation-20201019.pdf">Deed of Variation to Constitution</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2022/10/ABNCurrentDetails_67602797660.pdf">ABN Current Details</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2022/10/THWS-Business-Name-Registration-2019-2025.pdf">THWS Business Name Registration to 8 February 2025</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2023/11/Licence-Agreement-with-THSC-231024.pdf">Balcombe Heights Licence Agreement with THSC to 31 July 2028</a></li>
                    </ul>
                </section>

                <section>
                    <h2>Templates and Forms</h2>
                    <ul>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2023/11/Pitch-deck_210923-1.pptx">PVF Pitch Deck</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2022/10/PVF-Programme-Template.docx">PVF Program Template</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2022/12/PVF-letterhead.docx">PVF Letterhead Nov 2022</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2022/11/New-PVF-Logos-Nov-2022.docx">PVF Logos Nov 2022</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2022/10/PVF-Board-Event-Template.docx">PVF Board Event Template</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2022/11/Presentation-Template-Nov-2022.pptx">PVF Presentation Template Nov 2022</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2022/11/PVF-Fundraising-Event-Control-Template-Nov-2022.xlsx">PVF Fundraising Event Control Template Nov 2022</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2022/10/EOI-blank-template-for-Board-of-Director-position.docx">PVF Expression of Interest for Director Position</a></li>
                    </ul>
                </section>

                <section>
                    <h2>Internal Policies and Procedures</h2>
                    <ul>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2024/06/PVF-Ambassadors-June-2024.pdf">[PDF] PVF Ambassadors June 2024</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2024/06/Director-Leaving-Procedures-May-2024.pdf">[PDF] Director Leaving Procedures May 2024</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2024/06/PVF-Operations-Manual-May-2024.pdf">[PDF] PVF Operations Manual May 2024</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2024/06/Onboarding-New-Directors-Procedures-May-2024.pdf">[PDF] Onboarding New Directors Procedures May 2024</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2024/04/EOI-For-Board-of-Director-Position-April-2024.pdf">[PDF] EOI For Board of Director Position April 2024</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2025/07/Sponsorship-policy.pdf">[PDF] Sponsorship Policy</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2024/03/PVF-NEWSLETTER-HOW-TO-GUIDE-Feb-2024.pdf">[PDF] PVF Newsletter How-to-guide Feb 2024</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2024/06/Paw-Visits-Procedures-May-2024.pdf">[PDF] Paw Visits Procedures May 2024</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2024/06/Young-Healthy-Minds-Forum-Procedures-June-2024.pdf">[PDF] Young Healthy Minds Forum Procedures June 2024</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2024/02/UPmarket-Procedures-Feb-2024.pdf">[PDF] UPmarket Procedures Feb 2024</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2024/02/PVF-Board-Charter-Jan-2024.pdf">[PDF] PVF Board Charter Jan 2024</a></li>
                        <li><a href="https://positivevibes.org.au/wp-content/uploads/2023/12/Grant-Submission-Process-December-2023.pdf">[PDF] Grant Submission Process December 2023</a></li>
                    </ul>
                </section>

                <section>
                    <h2>Google Calendar</h2>
                    <div class="calendar-container">
                        <iframe
                            src="https://calendar.google.com/calendar/embed?src=info%40positivevibes.org.au&amp;ctz=Australia%2FSydney"
                            style="border: 0"
                            width="100%"
                            height="600"
                            frameborder="0"
                            scrolling="no">
                        </iframe>
                    </div>
                </section>
            </div>
        </div>


    <?php
    } else {
        // Incorrect password
        echo '<p>Incorrect password. Please try again.</p>';
        show_password_form();
    }
} else {
    // No password entered yet
    show_password_form();
}

function show_password_form()
{
    ?>
    <div class="container">
        <form class="post-password-form" method="post">
            <p>This content is password protected. To view it please enter your password below:</p>
            <p>
                <label>Password: <input name="post_password" type="password" size="20"></label>
                <input type="submit" name="Submit" value="Enter">
            </p>
        </form>
    </div>
<?php
}

get_footer();
?>