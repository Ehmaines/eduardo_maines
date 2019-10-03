function conf_delete(){
    var conf = confirm("Tem certeza que deseja deletar?");
    if (conf == true){
        window.location = "Location: produto.php?action=index";
    }
    else{
        break;
    }
}