<!DOCTYPE html>
<html>
    <head> 
        <meta charset="utf-8">
        <title> São Paio Sc</title>
        <link rel="stylesheet" href="telemovel.css">
	    <link rel="stylesheet" media="screen and (min-width: 800px)" href="style.css">
        <link rel="shortcut icon" type="image/svg" href="img/logo.svg"/>
    </head>
    <body>
        <nav class="menu">
            <ul>
                <li><a href="index.html" class="logo">
                    <img src="img/logo.svg" class="fas fa-home">
                    <span class="nav-item"> São Paio Sc </span>
                </a></li>
                <li><a href="index.html" class="iconmenu">
                    <img src="img/logo.svg" class="fas fa-home">
                    <span class="nav-item"> Clube </span>
                </a></li>
                <li><a href="index.html" class="iconmenu">
                    <img src="img/bola.svg" class="fas fa-home">
                    <span class="nav-item"> Escalões </span>
                </a></li>
                <li><a href="index.html" class="iconmenu">
                    <img src="img/logo.svg" class="fas fa-home">
                    <span class="nav-item"> Sócios </span>
                </a></li>
                <li><a href="index.html" class="iconmenu">
                    <img src="img/jornal.svg" class="fas fa-home">
                    <span class="nav-item"> Notícias </span>
                </a></li>
                <li><a href="index.html" class="iconmenu">
                    <img src="img/logo.svg" class="fas fa-home">
                    <span class="nav-item"> Agenda </span>
                </a></li>
                <li><a href="index.html" class="iconmenu">
                    <img src="img/bilhete.svg" class="fas fa-home">
                    <span class="nav-item"> Bilhetes </span>
                </a></li>
                <li><a href="index.html" class="iconmenu">
                    <img src="img/loja.svg" class="fas fa-home">
                    <span class="nav-item"> Loja </span>
                </a></li>
                <li><a href="index.html" class="iconmenu">
                    <img src="img/logo.svg" class="fas fa-home">
                    <span class="nav-item"> App </span>
                </a></li>
                <li><a href="index.html" class="iconmenu">
                    <img src="img/apoio.svg" class="fas fa-home">
                    <span class="nav-item"> Apoio ao Adepto </span>
                </a></li>
                <li><a href="index.html" class="iconmenu">
                    <img src="img/camera.svg" class="fas fa-home">
                    <span class="nav-item"> Multimédia </span>
                </a></li>
                <li><a href="index.html" class="iconmenu">
                    <img src="img/logo.svg" class="fas fa-home">
                    <span class="nav-item"> Revista </iconmenu>
                </a></li>
                <li><a href="index.html" class="iconmenu">
                    <img src="img/logo.svg" class="fas fa-home">
                    <span class="nav-item"> Troféus/Museu </span>
                </a></li>
                <li><a href="index.html" class="iconmenu">
                    <img src="img/logo.svg" class="fas fa-home">
                    <span class="nav-item"> Patrocinadores </span>
                </a></li>
            </ul>
        </nav>

        <div class="criarconta">
            <form action="">
                    <legend class="criarcontatexto">
                        <b> Criar Conta </b>
                    </legend>
                    <br>
                    <div class="inputbox">
                        <input type="text" name="nome" id="nome" class="InputUser" required>
                        <label for="name" class="LabelInput">Nome de Utilizador</label>
                    </div>
                    <br><br>
                    <div class="inputbox">
                        <input type="text" name="email" id="email" class="InputUser" required>
                        <label for="email" class="LabelInput">Gmail</label>
                    </div>
                    <br><br>
                    <div class="inputbox">
                        <input type="text" name="nome" id="nome" class="InputUser" required>
                        <label for="name" class="LabelInput">Palavra-Passe</label>
                    </div>
                    <br><br>
                    <p>Sexo:</p>
                    <br>
                    <input type="radio" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" name="genero" value="outros" required>
                    <label for="outros">Outros</label>
                    <br><br>
                    <label for="data_nascimento">Ano de Nascimento:</label>
                     <input type="date" name="data_nascimento" id="data_nascimento" required>
                    <br><br>
                    <div class="inputbox">
                        <input type="number" name="telemovel" id="telemovel" class="InputUser" required>
                        <label for="telemovel" class="LabelInput">Numero de Telemovel</label>
                    </div>
                    <br><br>
                    <p>Tipo de conta:</p>
                    <br>
                    <input type="radio" name="conta" value="jogador" required>
                    <label for="jogador">jogador</label>
                    <br>
                    <input type="radio" name="conta" value="treinador" required>
                    <label for="treinador">Treinador</label>
                    <br>
                    <input type="radio" name="conta" value="adepto" required>
                    <label for="adepto">Adepto</label>
                    <br> <br>
                    <input type="submit" name="submit" id="submit">
            </form>
        </div>
    </body>
</html>