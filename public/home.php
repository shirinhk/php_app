<?php
    $home_pics = [
        [
            'image' =>  '../images/vaccine.jpeg'
        ]
    ];
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/main.css">     
    </head>

    <body>
        
        <?php 
            include '../includes/partials/navigation.php';
        ?>
        <div class="container">
        
            <div class="main_text">
                <p>
                Dear Patients,
                <br>
                Kindly note that we are no longer a walk-in clinic. We are a Family Practice with booked appointments only. 
                Emails and voicemails are not monitored while the clinic is closed, however Patients are welcome to <b>message us via our 
                Website Contact Form </b>24/7 to book, reschedule, or cancel appointments and we will get back to them in 1 day.
                If you require medical care during the holidays, please contact any Ontario walk-in clinic for assistance.
                If you require a prescription renewal while the clinic is closed, please ask your Pharmacy Team for a prescription extension. They have 
                the ability to provide Patients with last minute extensions for 1-4 weeks (as long as the medication is not a narcotic or controlled-substance).
                </p>
            </div>
            <hr>
            <div>
                <h3 class="services">MEDICAL SERVICES</h3>
                <ul class="box_1">
                    <li class="box"><h3>Infants <br>and <br>Toddlers</h3></li>
                    <li class="box"><h3>Kids and Teens</h3></li>
                    <li class="box"><h3>Pregnancy <br>and <br>Childbirth</h3></li>
                    <li class="box"><h3>Procedures <br>& Devices</h3></li>
                </ul>
                <ul class="box_1">
                    <li class="box2"><h3>Women</h3></li>
                    <li class="box2"><h3>Men</h3></li>
                    <li class="box2"><h3>Seniors</h3></li>
                    <li class="box2"><h3>Immunization</h3></li>
                </ul>
            </div>

            <hr>

            <div class="home_desc">
                <div>
                    <?php
                        foreach ($home_pics as $pics) {
                    ?>
                    <img class="main_pic" src="<?php echo $pics['image']; ?>" alt="vaccine">
                    <?php
                        }
                    ?>
                </div>
                <div class="home_desc_2">
                    <h3> Covid Vaccine for Younger Kids: what parents need to know</h3>
                    <p id="vaccine_text">The Pfizer-BioNTech COVID-19 vaccine for children is being given in 2 doses, 3 weeks apart. It is a lower dose (10 micrograms) 
                        than the one used for older age groups (30 micrograms).
                    With the newer variants, there is evidence that children can become very sick from COVID-19 resulting in hospitalization. 
                    Children can also have long-term complications from COVID-19 even with a mild or asymptomatic infection.
                    Vaccinating children can also protect family members. This includes siblings who may be too young to get vaccinated and 
                    family members who may have an increased risk of getting sick if they are infected.
                    Children ages 5-11 who have moderate to severe immunosuppression can receive an additional (3rd) dose of the Pfizer vaccine 
                    to ensure they have adequate protection.
                    </p>
                </div>
            </div>


            <?php 
                include '../includes/partials/navigation_2.php';
            ?>
        </div>
    </body>
</html>