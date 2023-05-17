<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Latihan1</title>
</head>
<body>
    <form name="latihan01" method="POST" onsubmit="return checkform(this)">
    <div>
        NAMA
        <input type="text" name="txNAMA" id="NAMA">
    </div>
    <div>
        NIM
        <input type="text" name="txNIM" id="NIM">
    </div>
    <div>
        Jenis Kelamin<br>
        <input type="radio" name="txJKEL" id="JKEL" value="L">Laki-Laki
        <input type="radio" name="txJKEL" id="JKEL" value="P">Perempuan
    </div>
    <div>
        Jurusan
        <select name="txJURUSAN" id="JURUSAN">
            <option value="MDI">MDI</option>
            <option value="KAB">KAB</option>
            <option value="DKV">DKV</option>
            <option value="BD">BD</option>
            <option value="SK">SK</option>
        </select>
    </div>
    <div>
        Hobby
        <input type="checkbox" name="txHOBBY_MANCING">Mancing
        <input type="checkbox" name="txHOBBY_NYANYI">Nyanyi
        <input type="checkbox" name="txHOBBY_MANGGANG">Manggang
        <input type="checkbox" name="txHOBBY_MENARI">Menari
        <input type="checkbox" name="txHOBBY_NYUNSET">Nyunset

    </div>
        <div>
        <button type="submit"> 💑 </button>
    </div>
    </form>
    <script>
        function checkform(frm){
            let F = frm.elements;
            let nim = F.namedItem('txNIM').value;
            let jnskel = F.namedItem('txJKEL').value;
            let n = F.namedItem('txNAMA').value;
            let jr = F.namedItem('txJURUSAN').value;
            let hb = [
                F.namedItem('txHOBBY_MANCING').checked,
                F.namedItem('txHOBBY_NYANYI').checked,
                F.namedItem('txHOBBY_MANGGANG').checked,
                F.namedItem('txHOBBY_MENARI').checked,
                F.namedItem('txHOBBY_NYUNSET').checked,
            ]

            console.log("Nama: "+n)
            console.log("NIM: "+nim)
            console.log("Jenis Kelamin: "+jnskel)
            console.log("Jurusan: "+jr)
            console.log("Hobby: "+hb)

            return false;
        }
    </script>
</body>
</html>