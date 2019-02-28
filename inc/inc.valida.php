<?php
session_start();
require_once('inc.db_connection.php');

if(isset($_POST['cpf'])){
    $cpf = $_POST['cpf'];
        
    $resultadoCpf = mysqli_query($conexao, "SELECT cpf FROM usuario WHERE cpf='$cpf'");
    
    $_SESSION['contaCpf'] = mysqli_num_rows($resultadoCpf);
  
}
if(isset($_POST['email'])){
	$email = $_POST['email'];
	
	$resultadoEmail = mysqli_query($conexao, "SELECT email FROM usuario WHERE email='$email'");
    
    $_SESSION['contaEmail'] = mysqli_num_rows($resultadoEmail);
      	
}

if(isset($_POST['rg'])){
	$rg = $_POST['rg'];
	
	$resultadoRg = mysqli_query($conexao, "SELECT rg FROM usuario WHERE rg='$rg'");
    
    $_SESSION['contaRg'] = mysqli_num_rows($resultadoRg);
    	
    	
}

if(isset($_SESSION['contaEmail'])){
	if($_SESSION['contaEmail']){
		echo('<font color="red"><br>*EMAIL JÁ CADASTRADO*</font>');
		?>
        <script type="text/javascript">
            document.getElementById("btn_cadastrar").disabled = true;
        </script>
        <?php
	}else{
		echo('');
		if(isset($_SESSION['contaCpf']) || isset($_SESSION['contaEmail']) || isset($_SESSION['contaRg'])){
			if($_SESSION['contaCpf'] > 0 || $_SESSION['contaEmail'] > 0 || $_SESSION['contaRg'] > 0){
				?>
                <script type="text/javascript">
                    document.getElementById("btn_cadastrar").disabled = true;
                </script>
                <?php
			}else{
				?>
                <script type="text/javascript">
					document.getElementById("btn_cadastrar").disabled = false;
				</script>
                <?php
			}
		}else{
			?>
            <script type="text/javascript">
				document.getElementById("btn_cadastrar").disabled = false;
			</script>
            <?php
		}
	}
}
if(isset($_SESSION['contaCpf'])){
	if($_SESSION['contaCpf']){
    	
	echo('<font color="red"><br>*CPF JÁ CADASTRADO*</font>');
	?>
    <script type="text/javascript">
		document.getElementById("btn_cadastrar").disabled = true;
	</script>
    <?php    	
     }else{
     	echo ('');
     	if(isset($_SESSION['contaEmail']) || isset($_SESSION['contaEmail']) || isset($_SESSION['contaRg'])){
     		if($_SESSION['contaEmail'] > 0 || $_SESSION['contaEmail'] > 0 || $_SESSION['contaRg'] > 0){
			?>
            <script type="text/javascript">
				document.getElementById("btn_cadastrar").disabled = true;
			</script>
            <?php
     		}else{
	     	 	?>
                <script type="text/javascript">
	    			document.getElementById("btn_cadastrar").disabled = false;
	    		</script>
                <?php
     		}
     	}else{
     	 	?>
            <script type="text/javascript">
    			document.getElementById("btn_cadastrar").disabled = false;
    		</script>
            <?php
     	}
     }
}

if(isset($_SESSION['contaRg'])){
	if($_SESSION['contaRg']){
		echo('<font color="red"><br>*RG JÁ CADASTRADO*</font>');
		?>
        <script type="text/javascript">
            document.getElementById("btn_cadastrar").disabled = true;
        </script>
        <?php
	}else{
		echo('');
		if(isset($_SESSION['contaCpf']) || isset($_SESSION['contaEmail']) || isset($_SESSION['contaRg'])){
			if($_SESSION['contaCpf'] > 0 || $_SESSION['contaEmail'] > 0 || $_SESSION['contaRg'] > 0){
				?>
                <script type="text/javascript">
                    document.getElementById("btn_cadastrar").disabled = true;
                </script>
                <?php
			}else{
				?>
                <script type="text/javascript">
					document.getElementById("btn_cadastrar").disabled = false;
				</script>
                <?php
			}
		}else{
			?>
            <script type="text/javascript">
				document.getElementById("btn_cadastrar").disabled = false;
			</script>
            <?php
		}
	}
}