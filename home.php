<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books'life</title>
    <link rel="stylesheet" href="./font/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="shortcut icon" href="./img/books.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
</head>
<style>
    .navbar {
    position: fixed;
    display: flex;
    flex-flow: column;
    justify-content: center;
    align-items: center;
    height: 100px;
    width: 100%;
    background-color: transparent;
    top: calc(100% - 100px);
    left: 0;
    z-index: 99;
    transition: 0.2s ease;
  }
  .navbar ul {
    list-style: none;
    background-color: #55b9;
    backdrop-filter: blur(5px);
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 0.75rem;
    border-radius: 10px;
    box-shadow: 0 0px 20px 0 rgba(5, 4, 62, 0.25);
  }

  .navbar:hover{
    left: 0;
  }

  .navbar a span {
    position: absolute;
    background-color: #55b9;
    white-space: nowrap;
    padding: 0.5rem 1rem;
    border-radius: 6px;
    bottom: calc(100% + 1.5rem);
    left: -25%;
    transform-origin: center right;
    transform: scale(0);
    opacity: 0;
    transition: 0.15s ease;
  }

  .navbar a:hover span, a:focus span, a.active span {
    transform: scale(1);
    opacity: 1;
  }
  .navbar a {
    color: #FFF;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 3rem;
    height: 3rem;
    border-radius: 8px;
    position: relative;
  }
</style>
<body>
    <nav class="navbar">
        <ul>
            <li>
                <a href="index.html"><i class="fa fa-home"></i><span>Tela inicial</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-book"></i><span>Livros</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-cube"></i><span>Quem somos?</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-add"></i><span>Novo livro</span></a>
            </li> 
        </ul>
    </nav>
    <section>
        <h1 class="title">Home</h1>
        <div class="viewport">
            <div class="carrosel">
                <div class="card">1</div>
                <div class="card">2</div>
                <div class="card">3</div>
                <div class="card">4</div>
                <div class="card">5</div>
                <!--
                    <img src="" alt="" class="card">
                    <img src="" alt="" class="card">
                    <img src="" alt="" class="card">
                    <img src="" alt="" class="card">
                    <img src="" alt="" class="card">
                -->
            </div>
        </div>
    </section>
</body>
</html>
