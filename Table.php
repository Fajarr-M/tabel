<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Table</title>
  <style>
  body{
    width: 100%;
    height: 100vh;
    background: linear-gradient(to bottom, #ff4f8b, #dff1ff);
    overflow: hidden;
  }
  .card{
    width: 300px;
    height: 200px;
    margin: 50px auto;
    border: 1px solid rgba(255,255,255,0.5);
    border-right: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.2);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    border-radius: 10px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(5px);
    
  }
  h3{
    color: white;
  }
  .form #submit{
    margin: 10px auto;
    display: flex;
    color: white;
    cursor: pointer;
    border: none;
    background: rgba(255,255,255,0.2);
    border-radius: 5px;
    border: 1px solid rgba(255,255,255,0.5);
    border-right: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.2);
    box-shadow: 0 25px 45px rgba(0,0,0,0.1);
  }
  .form input{
    background: rgba(255,255,255,0.2);
    outline: none;
    border-radius: 5px;
    border: 1px solid rgba(255,255,255,0.5);
    border-right: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.2);
    box-shadow: 0 25px 45px rgba(0,0,0,0.1);
  }
  .form table{
    color: white;
  }
  </style>
</head>
<body>
<div class="card">
<h3>Generate Tabel</h3>
<form method="post" action="generate.php">
  <div class="form">
    <table>
      <tr>
        <td><label>Jumlah Kolom</label></td>
        <td>
        <input name="JumlahColum" type="text" id="JumlahColum" onKeyUp="getmax();" onfocus="this.select();"/>
        </td>
      </tr>
      <tr>
        <td>Jumlah Cell</td>
        <td>
        <input name="JumlahCell" type="text" id="JumlahCell" onKeyUp="getmax();" onfocus="this.select();"/>
        </td>
      </tr>
    </table>
    <input id="submit" type="submit" name="Generate" value="Generate"/>
  </div>
</form>
</div>
</body>
</html>