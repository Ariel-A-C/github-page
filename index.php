<!DOCTYPE html>
<html>
<head>
    <title>Exercici Objectes</title>
</head>
<body>
<h1>Exercici Objectes</h1>

<button id="btn1">Introduir dades</button>
<button id="btn2" style="display: none;">Mostrar dades</button>

<div id="dades"></div>

<script>
    let persona;

    document.getElementById('btn1').addEventListener('click', function() {
        let nom = prompt('Introdueix el teu nom:');
        let cognom = prompt('Introdueix el teu cognom:');
        let edat = prompt('Introdueix la teva edat:');

        persona = new Persona(nom, cognom, edat);

        this.style.display = 'none';
        document.getElementById('btn2').style.display = 'block';
    });

    document.getElementById('btn2').addEventListener('click', function() {
        document.getElementById('dades').innerHTML = persona.mostrarInfo();
    });

    function Persona(nom, cognom, edat) {
        this.nom = nom;
        this.cognom = cognom;
        this.edat = edat;
        
        this.mostrarInfo = function() {
            return 'Nom: ' + this.nom + '<br>Cognom: ' + this.cognom + '<br>Edat: ' + this.edat;
        };
    }
</script>
</body>
</html>
