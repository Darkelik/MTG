</body>
<footer>
    <p>&copy; Le site web de Frédéric "Darkelik" VAZ</p>
    <p><a href="#titre">Retour en haut</a></p>
    <p><a href="http://dimitri.watel.free.fr">Site cours WATEL</a></p>
    <p>(parce que pourquoi pas)</p>
</footer>
<script>
    let desc = document.getElementById('intro')
    let jn = document.getElementById('jour-nuit')

    function appliquerMode() {
        if (localStorage.getItem('mode') === 'nuit') {
            document.body.style.backgroundColor = "black"
            desc.style.color = "white"
        } else {
            document.body.style.backgroundColor = "white"
            desc.style.color = "black"
        }
    }

    appliquerMode()
    
    jn.addEventListener('click', () => {
        if (document.body.style.backgroundColor != "black") {
            document.body.style.backgroundColor = "black"
            desc.style.color = "white"
            localStorage.setItem('mode', 'nuit') // Enregistrer le mode nuit
        } else {
            document.body.style.backgroundColor = "white"
            desc.style.color = "black"
            localStorage.setItem('mode', 'jour') // Enregistrer le mode jour
        }
    })
    
</script>
</html>