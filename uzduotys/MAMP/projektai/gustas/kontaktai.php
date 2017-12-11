<?php require_once('./kontaktaiDB.php');
$contact = getContact($connect, 3);?>
<?php require_once('./head.php'); ?>

    <body class="">

<?php require_once('./navigation.php'); ?>


<div class="container-fluid ">
    <div class="row mt-5 bg-kaunas">
        <div class="col-md-6 px-0">
                <iframe class="mb-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1707.4107670177018!2d23.898395127343434!3d54.89577298910828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e7220dac584351%3A0xb3c2054ed35ab1c2!2sNemuno+g.+16A%2C+Kaunas+44294!5e0!3m2!1sen!2slt!4v1512307783534" width="100%" height="750px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="col-md-6 align-items-center">
            <div class=" mx-auto">
                        <h1 class="title uzrasas">VYNUOGYNAS KAUNE</h1>
                        <h6 class="line"></h6>
                        <h5 class="info"><?php print_r($contact['adresas']);?></h5>
                        <h4 class="info weight">Susirinkimai:</h4>
                        <h5 class="info">Kiekvieno mėnesio 2 ir 4 sekmadienį.</h5>
                        <h4 class="info weight" ><a href="email.php" class="info">Susisiekite:</a></h4>
                        <div class="info">
                            <a href="https://www.facebook.com/panevezio.vynuogynas?fref=search"><img src="./pictures/svgicons/fb.svg" class="mr-2" onerror="this.onerror=null; this.src='image.png'" width="30px">
                            <a href="https://www.facebook.com/panevezio.vynuogynas?fref=search"><img src="./pictures/svgicons/email.svg" class="mr-2" onerror="this.onerror=null; this.src='image.png'" width="35px">
                            <a href=<?php print_r($contact['numeris']);?>><img src="./pictures/svgicons/phone.svg" class="" onerror="this.onerror=null; this.src='image.png'" width="30px">
                        </a></div>
                        <div class="info"><h4>
                            <?php print_r($contact['vardas']); echo ' ';
                            print_r($contact['pavarde']);?>
</h4>
                                <h4>tel. nr.: <a href="tel:<?php print_r($contact['numeris']);?>" class="info"><?php print_r($contact['numeris']);?></a></h4></div>

            </div><!-- sitas div row visos miestai-uzrasaspuses eile -->
        </div><!-- sitas div col-6 uzdaro kontaktu puse -->
    </div><!-- sitas div uzdaro eile -->
</div> <!-- sitas div uzdaro konteineri -->
<?php require_once('./footer.php');?>

<!--
<div class="text-center">
    <h1>VYNUOGYNAS KAUNE</h1>
</div>

<div class="p-2 d-block">
    <h4>ADRESAS Kaune:</h4>
    <h5>Nemuno g. 16A</h5><br />
</div>

<div class="p-2 d-block">
    <h4>Susirinkimai Kaune vyksta:</h4>
    <h5>Kiekvieno mėnesio 2 ir 4 sekmadienį.</h5><br />
</div>

<div class="p-2 d-block">
    <div class="float-left">
        <h4>Pastorius: Žilvinas Škulevičius</h4>
        <h4>tel. nr. :</h4>
        <h5>+37064305598</h5>
    </div>


        <img src="./pictures/zilvinas.jpg" class="float-left ml-5" width="100px"  />

</div>

<div class="p-2 ">
    <h4 class="float-left">Vynuogyno Facebook paskyra:</h4>
    <a href="https://www.facebook.com/panevezio.vynuogynas?fref=search"><img src="./pictures/svgicons/fb.svg" class="ml-4 float-right" onerror="this.onerror=null; this.src='image.png'" width="30px"></a>

</div> -->
