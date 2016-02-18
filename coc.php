<?php 
$page = 5;
include_once("includes/header.php"); 
?>
        
    <!-- ******others****** -->
    <section id="others" class="others section">
        <div class="row text-center">
            <div class="col-md-12 sponsorship">
                <div class="col-md-8 col-md-offset-2">
                    
                     <h2 class="title text-center">
                <img src="images/icons/coc.png" /><br/> CODE OF CONDUCT
            </h2>    
                </div>    
                <div class="col-md-10 col-md-offset-1 text-left">
                                        <br/>
                    <p> PyCon India is a community organized conference intended for advocating the use and adoption of the Python programming language in India. It is also a platform for fostering networking and collaboration among the Python developer community in India.</p>
                    <p>We value the participation of every member of the Python community and want all attendees to have an enjoyable and rewarding experience. Accordingly, every attendee of the conference is expected to show respect and courtesy to every other attendee throughout the conference and at all conference related events, whether officially organized by PyCon India or not.</p>
                    <p>To make clear what is expected, all delegates/attendees, speakers, exhibitors, organizers and volunteers at PyCon India are required to conform to the following Code of Conduct. Organizers will enforce this code throughout the event.</p>
                    <br/>
                    <h2>Short Version</h2>
                    <p>PyCon India is dedicated to providing a harassment-free conference experience for everyone, regardless of age, gender, sexual orientation, physical appearance, disability, race, religion or employment. We don't tolerate harassment of attendees in any form.</p>
                    <p>All communication should be appropriate for a professional audience, including people from many different backgrounds.<p>
                    <p><b>Code for Speakers:</b></p>
                    <p>Sexual language or imagery is inappropriate for your talks or slides. Refrain from using sexist, racist or exclusionary language anywhere in your content.</p>
                    <p><b>Code for Exhibitors and Sponsors:</b></p>
                    <p>Exhibitors in the expo hall, sponsor or vendor booths, are subject to the anti-harassment policy. </p>
                    <p>Exhibitors should not use sexualized images, activities, or other material.</p>
                    <p>Booth staff (including volunteers) should not use sexualized clothing/uniforms/costumes, or otherwise create a sexualized environment.</p>
                    <p><b>Code for Participants:</b></p>
                    <p> Be kind and sensitive to the people around you and avoid any kind of offensive behavior. Sexist, racist or any other form of exclusionary or offensive jokes or excessive public swearing are not appropriate at any venue of PyCon India.</p>
                    <p>Attendees violating these rules may be asked to leave the conference without a refund at the sole discretion of the conference organizers.</p>
                    <p>Thank you for your consideration and help in making PyCon India a welcoming, friendly event for all of us.</p>
                    <h2>Long Version</h2>
                    <p>PyCon India is dedicated to providing a harassment-free conference experience for everyone, regardless of age, gender, sexual orientation, physical appearance, disability, race, religion or employment.</p>
                    <p>Harassment includes offensive verbal comments related to gender, sexual orientation, disability, physical appearance, body size, race, religion, sexual images in public spaces, deliberate intimidation, stalking, following, harassing photography or recording, sustained disruption of talks or other events, inappropriate physical contact, and unwelcome sexual attention. We have zero tolerance on harassment of conference participants in any form, including, but not limited to the activities mentioned here.</p>
                    <p>Participants asked to stop any harassing behavior are expected to comply immediately.</p>
                    <p>Exhibitors in the expo hall, sponsor or vendor booths, or similar activities are also subject to the anti-harassment policy. In particular, exhibitors should not use sexualized images, activities, or other material. Booth staff (including volunteers) should not use sexualized clothing/uniforms/costumes, or otherwise create a sexualized environment.</p>
                    <p>All communication should be appropriate for a professional audience, including people from many different backgrounds. Sexual language or imagery is inappropriate for all aspects of the conference, including talks. Remember that sexist, racist or any other form of exclusionary or offensive jokes or excessive public swearing are not appropriate at any venue of PyCon India.</p>
                    <p>Do not insult or put down attendees or engage in any action that violates the open, welcoming and sharing spirit of the conference. Be kind and sensitive to the people around you when you are attending the conference, and avoid any kind of offensive or degrading behavior.</p>
                    <p>If a participant engages in behavior that violates this code of conduct, the conference organizers may take any action they deem appropriate, including warning the offender or expulsion from the conference with no refund.</p>
                    <p>Thank you for helping to make PyCon India a welcoming, friendly event for all.</p>
                    <h3>Contact Information</h3>
                    <p>If you are being harassed, notice that someone else is being harassed, or have any other concerns, please contact a member of conference staff. Conference staff will be wearing "PyCon India Staff" or "PyCon India Volunteer" badges.</p>
                    <p> You may also ask to be put in touch with the conference chair‚ Vijay Bang.</p>
                    <p>If the matter is especially urgent, please call/contact any of these individuals:</p>
                    <p>
                        Vijay Bang
                        <br/>
                        +91 9886761820
                    </p>
                    <p>
                        Kracekumar<br/>                        
                        +91 8553029521
                    </p>
                    <p>
                        Sreekanth Rameshaiah
                        <br/>
                        +91 9845512611
                    </p>
                    <p>Conference staff will be happy to help participants contact venue security or local law enforcement, provide escorts, or otherwise assist those experiencing harassment to feel safe for the duration of the conference. We value your attendance.</p>
                    <h3>License</h3>
                    <p>This Code of Conduct was forked from PSF Code of Conduct by Python Software Foundation which is under a Creative Commons Attribution 3.0 Unported License.</p>
                    <p>PyCon India Conference Code of Conduct is licensed under a Creative Commons Attribution 3.0 Unported License.</p>
                    <br/>
                </div> 
            </div>
        </div>        
    </section>
    <!--//others-->

<?php include_once("includes/footer.php"); ?>

<script>
$(function(){
    $(".overbg").fadeOut('fast','swing');
    // $(".skyline").fadeOut('fast','swing');

    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();         

        if($(window).scrollTop() + $(window).height() == $(document).height()) 
        {
            // $(".overbg").fadeIn('fast','swing');
            $(".skyline").fadeIn('fast','swing');
        }
        else
        {
            // $(".overbg").fadeOut('fast','swing');
            $(".skyline").fadeOut('fast','swing');
        }
    });
});
</script>