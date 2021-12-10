function showAd() {
    // console.log('click!');
    document.getElementById('log').style.display="inline";
    document.getElementById('tprod').style.display="none";
    document.getElementById('tped').style.display="none";
    document.getElementById('DisPro').style.display="none";
}
function showDp(){
    document.getElementById('DisPro').style.display="inline";
    document.getElementById('log').style.display="none";
    document.getElementById('tprod').style.display="none";
    document.getElementById('tped').style.display="none";
    
}
function Smodal(id){
    document.getElementById(id).style.display="block";
}
function Shide(id){
    document.getElementById(id).style.display="none";
}
function save_product(){
    let fd=new FormData();
    fd.append('Name', document.getElementById('Name').value);
    fd.append('Brand', document.getElementById('Brand').value);
    fd.append('Type', document.getElementById('Type').value);
    fd.append('Price', document.getElementById('Price').value);
    fd.append('Img', document.getElementById('Img').value);
    let request=new XMLHttpRequest();
    request.open('POST','api/product_save.php',true);
    request.onload=function(){
        if(request.readyState==4 && request.status==200){
            let response=JSON.parse(request.responseText);
            if(response.state){
                alert("saved.");
                console.log(response);
            }else{
                alert(response.detail);            
                console.log(response);
            }
        }
    }
    request.send(fd);
}
function editP(IdPro){
    let fd=new FormData;
    fd.append('IdPro',IdPro);
    let request=new XMLHttpRequest();
    request.open('POST','api/get_product.php',true);
    request.onload=function(){
        if(request.readyState==4 && request.status==200){
            console.log(request);
            let response=JSON.parse(request.responseText);
            console.log(response);
            document.getElementById('IdPro-e').value=IdPro;
            document.getElementById('Name-e').value=response.product.NomPro;
            document.getElementById('Brand-e').value=response.product.IdMar;
            document.getElementById('Type-e').value=response.product.TiPro;
            document.getElementById('Price-e').value=response.product.PriPro;
            document.getElementById('Img-e').value=response.product.Img;
            Smodal('modal-product-edit');
        }
    }
    request.send(fd);
}
function showPed(){
    document.getElementById('tped').style.display="inline";
    document.getElementById('tprod').style.display="none";
    document.getElementById('log').style.display="none";
    document.getElementById('DisPro').style.display="none";
}
function update_product(){
    let fd=new FormData();
    fd.append('IdPro',document.getElementById('IdPro-e').value);
    fd.append('Name', document.getElementById('Name-e').value);
    fd.append('Brand', document.getElementById('Brand-e').value);
    fd.append('Type', document.getElementById('Type-e').value);
    fd.append('Price', document.getElementById('Price-e').value);
    fd.append('StatusP', document.getElementById('StatusP-e').value);
    fd.append('Img', document.getElementById('Img-e').value);
    let request=new XMLHttpRequest();
    request.open('POST','api/update-product.php',true);
    request.onload=function(){
        if(request.readyState==4 && request.status==200){
            let response=JSON.parse(request.responseText);
            if(response.state){
                alert("ok");
                console.log(response);
                window.location.href="main.php";
            }else{
                alert(response.detail);            
                console.log(response);
            }
        }
    }
    request.send(fd);
}
function ChaSta(IdPro, StatusP){
    let fd = new FormData;
    fd.append('IdPro', IdPro);
    fd.append('StatusP', StatusP);
    let request=new XMLHttpRequest();
    request.open('POST','api/des_product.php',true);
    request.onload=function(){
        if(request.readyState==4 && request.status==200){
            let response=JSON.parse(request.responseText);
            if(response.state){
                alert("ok");
                window.location.reload();
            }else{
                alert(response.detail);            
                console.log(response);
            }
        }
    }
    request.send(fd);
}