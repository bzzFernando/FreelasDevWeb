<?php
/**
 * Created by PhpStorm.
 * User: rafa-
 * Date: 25/04/2018
 * Time: 15:11
 */
?>

<!DOCTYPE html>
<html lang = "pt-BR">
<head>
    <meta charset="utf-8">
    <meta name = " Author"  content="FreelasDev">
    <meta name = "Generator" content= "PHP Storm created by JETBRAINS">
    <meta name= "Keywords" content= "Desenvolvimento WebSite Palmas Social Media">
    <meta name= "Description" content= "Site empresarial Freelas Dev, especializada em Desenvolvimento Web e Midia Social">
    <meta name = "application-name"  content= "Freelas Dev WebSite">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="MDB Free/css/mdb.min.css">
    <link rel="stylesheet" href="UIkit/css/uikit.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed|Roboto+Condensed|Saira+Semi+Condensed" rel="stylesheet">

    <style>
        /*Como Usar as Fontes*/
        /*
            font-family: 'Saira Semi Condense', sans-serif;
            font-family: 'IBM Plex Sans Condensed',sans-serif;
            font-family: 'Roboto Condensed', sans-serif;
        */
            
        body{
            font-family: Roboto Condensed , sans-serif;
        }
        .uk-navbar-nav li a {color: white; font-family: Roboto Condensed,sans-serif}
        .logo {font-weight: bold; font-family: Saira Semi Condensed, sans-serif}
        .botaoBusca {background-color:  #32d296; color: white}
        ul li a:hover{
            border-bottom: 0.3pc solid #32d296;
            transition: 0.2s;
        }
            
        #ferramentas div a {color:#2BBBAD }
        #ferramentas div img {margin: 4}
    </style>

</head>

<body>
<header>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">Freelas Web Dev</a>
        <div class="navbar-header">
            <form class="form-check-inline">
                <input class="form-control" type="search" placeholder="Search">
                <button type="submit" class="btn btn-outline-info mx-2">Buscar</button>
            </form>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navFreelas" aria-controls="navFreelas" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>


        <div class="collapse navbar-collapse navbar-expand-md" id="navFreelas">
            <div class="container-fluid mt-2">
                <div class="row">
                    <ul class="navbar-nav mr-auto col-lg-9 float-left">

                        <li class="nav-item">
                            <a class="nav-link" href="Sobre.php">Sobre</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="Trabalhos.php">Trabalhos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="Suporte.php">Suporte </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="Contato.php">Contato </a>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </nav>

    <div class="container-fluid mt-2 text-danger">
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-center">Freelas WEB DEV</h4>
            </div>
            <div class="col-sm-12 col-md-6 ">
                <ul class="nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Sobre.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Trabalhos.php">Trabalhos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Suporte.php">Suporte </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Contato.php">Contato </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    </header>
    <header class="z-depth-2">
             <nav class="uk-navbar-container" uk-navbar>
                <div class="uk-navbar-left w-100 uk-background-secondary">
                    <ul class="uk-navbar-nav uk-margin-auto">
                        <li><a class="logo uk-navbar-item uk-logo uk-text-success" href="index.html"><\Freelas WEB></a></li>
                        <li><a href="">Projetos</a></li>
                        <li><a href="">Sobre</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                    <div class="uk-margin-auto">
                        <div class="uk-navbar-item uk-margin-auto" uk-grid>
                            <form action="javascript:void(0)" class="uk-margin-small-top uk-child-width-auto">
                                <input type="search" class="uk-input uk-width-auto" placeholder="Pesquisar no Site">
                                <button class="uk-button botaoBusca">Buscar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

    <h1>Manoel Testando o GitDesktop</h1>
