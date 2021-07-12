function Smodal(id){
    document.getElementById(id).style.display="block";
}
function Shide(id){
    document.getElementById(id).style.display="none";
}
function save_product(){
    let fd=new FormData();
    fd.append('id',document.getElementById('id').value);
    fd.append('Name',document.getElementById('Name').value);
    fd.append('Brand',document.getElementById('Brand').value);
    fd.append('Price',document.getElementById('Price').value);
    fd.append('Img',document.getElementById('Img').value);
    // fd.append('Id', document.getElementById('Id').value);
    // fd.append('Name', document.getElementById('Name').value);
    // fd.append('Brand', document.getElementById('Brand').value);
    // fd.append('Price', document.getElementById('Price').value);
    // fd.append('Img', document.getElementById('Img').value);
    let request=new XMLHttpRequest();
    request.open('POST','api/product_save.php',true);
    request.onload=function(){
        console.log(request);
    }
    request.send(fd);
}
function newA(id) {
    document.getElementById(id).style.display="none";
    document.getElementById('addBtn').style.display="none";
    document.getElementById('titleTxt').innerHTML="New User";
    document.getElementById('AdminNew').style.display="block";

}
function saveS(){
    console.log("true");
}
