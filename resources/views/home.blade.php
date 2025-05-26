<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #horloge{
            margin: 30px;
            font-size:2em;
            font-weight:bold;
            color:red;
        }
    </style>
</head>
<body>
    Home Page
        <br>
        <?php date_default_timezone_set('Europe/Paris') ?>
        <datetime><?php echo now() ?> </datetime>
        <br>
        <datetime>{{date('d/m/y')}} </datetime>
        <br>
        <datetime id="horloge">{{date('H:i:s')}} </datetime>
    <script>
        function updateClock(){
            //Récupérer la date et l'heure dans constante now
            const now=new Date();
            //Extraire l'heure de la constante
            const hours=String(now.getHours()).padStart(2,'0');
            const minutes=String(now.getMinutes()).padStart(2,'0');
            const seconds=String(now.getSeconds()).padStart(2,'0');
            // formater l'heure affichée
            const heureaffichee=`${hours}:${minutes}:${seconds}`;
            //Mettre à jour le contenu de l'élément horloge avec l'heure affichée
            document.querySelector('#horloge').textContent=heureaffichee
            //Met a jour automatiquement toutes les 1000 millisecondes
            

        }
        setInterval(updateClock,1000);
        
    </script>
</body>
</html>