
function verif() {
    ref=document.getElementById("nom").value.length;
    a=document.getElementById("nom").value;
    if (ref==0)
    {
     alert('Nom du produit est obligatoire');
     document.getElementById('nom').style.backgroundColor="red";
     return false;
    }
 



}
function confirmer()
    {
        if (confirm('ajouter')) {
            myform.submit();
        }
    }