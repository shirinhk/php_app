<?php
    $clinicsData = [
        [
            'title' => 'Westmount Medical Walk-in Clinic',
            'adress' => '925 Wonderland Rd south, London ON',
            'image' =>  'https://assets.skipthewaitingroom.com/images/ClinicPictures/ON/westmount-medical-walk-in-clinic-westmount-medical-walk-in-clinic.JPG'
        ],

        [
            'title' => 'South London Urgent Care and Walk-In Clinic',
            'adress' => '595 Bradley Ave, London ON',
            'image' =>  'https://assets.skipthewaitingroom.com/images/ClinicPictures/ON/south-london-urgent-care-and-walk-in-clinic-south-london-urgent-care-and-walk-in-clinic.JPG'
        ],

        [
            'title' => 'Oxford Walk In Clinic',
            'adress' => '102-140 Oxford Street East, London ON',
            'image' =>  'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3WxvAeEZctq7qSTyC03EmxWeYL5E_4rzuWg&usqp=CAU'
        ],

        [
            'title' => 'Riverbend Walk-in Clinic',
            'adress' => '2-1866 Oxford St W, London ON',
            'image' =>  'https://assets.skipthewaitingroom.com/images/ClinicPictures/ON/dr-langer-family-medicine-and-walk-in-clinic-dr-langer-family-medicine-and-walk-in-clinic.JPG'
        ],

        [
            'title' => 'Nixon Walk In Clinic',
            'adress' => '510 Southdale Rd E, Suite 101, London ON',
            'image' =>  'https://assets.skipthewaitingroom.com/images/ClinicPictures/ON/nixon-walk-in-clinic-nixon-walk-in-clinic.JPG'
        ],

        [
            'title' => 'TMC Walk In Clinic',
            'adress' => '1090 Hydepark Rd, London ON',
            'image' =>  'https://assets.skipthewaitingroom.com/images/ClinicPictures/ON/my-doctor-now-my-doctor-now-dundas.JPG'
        ],
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
            <div class="listing">
                <h4 class="kindly walk_ins">All Walk-In Clinics in Ontario are able to provide phone service during the pandemic. Please find a list of local Walk-In Clinics below:</h4>

                <div class="foreach">
                    <?php
                        foreach ($clinicsData as $data) {
                    ?>
                    <div class="populate">
                        <p class="titles">
                            <span class="title"><?php echo $data['title']; ?> </span>
                            <br>
                            <?php echo $data['adress']; ?>
                        </p>
                    
                         <img src="<?php echo $data['image']; ?>" alt="Walk-in Clinic">
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>


        <?php
            include '../includes/partials/navigation_2.php';
       ?>
    </body>
</html>