<html>
  <head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="..\styles\relatorios.css" media="screen" />
  </head>

  <body class="bg-primary" onload="document.getElementById('mod').style.display='none';">
        <div class="card card-header shadow-lg p-3 mb-5 bg-white rounded" style="border-radius: 20px!important;width:50%; left: 320px; top:60px; z-index:1; text-align:center;">
       <h3> Usuarios</h3>
        </div>
        <div class="card card-body" style="width:70%; left: 200px; overflow: scroll; ">
        <table class="table table-hover">
  <thead>
    <tr>
      <th>Codigo</th>
      <th>Nome</th>
      <th>Setor</th>
      <th>Produto</th>
      <th>Quantidade</th>
      <th>Observação</th>
      <th>Entrada</th>
      <th>Saida</th>
    </tr>
  </thead>
  <tbody id="tbody">
    <tr id="t1" onclick="document.getElementById('mod').style.display='block'">
      <td>01</td>
      <td>Álex</td>
      <td>CPD</td>
      <td>notebook</td>
      <td>2</td>
      <td>inspiron i15</td>
      <td>05/11/2019</td>
      <td>05/11/2019</td>
    </tr>
    <tr id="t1" onclick="document.getElementById('mod').style.display='block'">
      <td>01</td>
      <td>Álex</td>
      <td>CPD</td>
      <td>notebook</td>
      <td>2</td>
      <td>inspiron i15</td>
      <td>05/11/2019</td>
      <td>05/11/2019</td>
    </tr>
    <tr id="t1" onclick="document.getElementById('mod').style.display='block'">
      <td>01</td>
      <td>Álex</td>
      <td>CPD</td>
      <td>notebook</td>
      <td>2</td>
      <td>inspiron i15</td>
      <td>05/11/2019</td>
      <td>05/11/2019</td>
    </tr>
    <tr id="t1" onclick="document.getElementById('mod').style.display='block'">
      <td>01</td>
      <td>Álex</td>
      <td>CPD</td>
      <td>notebook</td>
      <td>2</td>
      <td>inspiron i15</td>
      <td>05/11/2019</td>
      <td>05/11/2019</td>
    </tr>
    <tr id="t1" onclick="document.getElementById('mod').style.display='block'">
      <td>01</td>
      <td>Álex</td>
      <td>CPD</td>
      <td>notebook</td>
      <td>2</td>
      <td>inspiron i15</td>
      <td>05/11/2019</td>
      <td>05/11/2019</td>
    </tr>

  </tbody>
</table>
        </div>
        </div>

        <div class="mod animacao container" id="mod">
        <div class="his card card-body shadow-lg p-3 mb-5 bg-white rounded">
        <form method="" action="">

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="senha">Senha</label>
      <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
    </div>
  
  </div>
  <hr>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" placeholder="nome" name="nome">
    </div>
    <div class="form-group col-md-6">
      <label for="sobrenome">Sobrenome</label>
      <input type="text" class="form-control" id="sobrenome" placeholder="sobrenome" name="sobrenome">
    </div>
  
  </div>
  <hr>
  <div class="form-row">
    
    <div class="form-group col-md-2">
      <label for="cpf">CPF</label>
      <input type="number" class="form-control" id="cpf" name="cpf">
    </div>
  
  <div class="form-group col-md-4">
      <label for="inputEstado">Setor</label>
      <select id="inputEstado" class="form-control">
        <option selected>Escolher...</option>
        <option name="setor">Ensino Fundamental I</option>
        <option name="setor">Ensino Fundamental II</option>
        <option name="setor">Ensino Medio</option>
        <option name="setor">CPD</option>
        <option name="setor">Arquivo</option>
      </select>
    </div>
    <div class="form-group col-md-6">
     <label>Nivel de Acesso : </label>
     <div class="container">
     <label>Alto</label>
     <input type="checkbox">
     <label>Medio</label>
     <input type="checkbox">
     <label>Baixo</label>
     <input type="checkbox">
     </div>
    </div>
    </div>
  <button type="submit" class="btn btn-primary">cadastrar</button>
</form>
        </div>
       </div>
  </body>
    </html>