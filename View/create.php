<?php
$title="Ajouter stagiaire";
ob_start(); 
?>
 <form action="index.php?action=store" method="post" >
    <div class="form-group">
     <label>Nom</label>
     <input type="text" class="form-control" name="nom">
    </div>
    <div class="form-group">
     <label>Prenom</label>
     <input type="text" class="form-control" name="prenom">
    </div>
    <div class="form-group">
     <label>Age</label>
     <input type="number" class="form-control" name="age">
    </div>
    <div class="form-group">
     <label>Login</label>
     <input type="text" class="form-control" name="login">
    </div>
    <div class="form-group">
     <label>Password</label>
     <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group">
     <input type="submit" class="btn-success my-2" name="Ajouter" value="Ajouter">
    </div>
 </form>

<?php $content=ob_get_clean()?>
<?php include_once'View/layout.php'?>
