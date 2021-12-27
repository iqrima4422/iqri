<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title> Calculator Scientific</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> 
    <link rel="stylesheet" href="styleCSS/styleKalkulator.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <section class="cover-1 text-center">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand">Calculator Scientific</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse pull-xs-right justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mt-2 mt-md-0">
                <li class="nav-item active">
                <a class="nav-link" href="HomeLogin.php">Back to Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    <div>
    </section>
        <marquee><b>Aliyya Putri | Dina Rifa | Iqri Mannisa' | Zalfa Putri</b></marquee>
    </div>
    </body>
    <div id="app">
        <div class="calculator">
            <button @click="changeModeEvent" class="toggle-button">
                <p v-if="changeMode"><B> Show Advanced Mode &nbsp; &nbsp; &#9864;</b></p>
                <p v-else><b>Show Basic Mode &nbsp; &nbsp; &#9862;</b></p>
            </button>
            <div class="results">
                <input class="input" v-model="current" />
            </div>
            <div class="mode" v-if="changeMode">
                <button class="button" @click="press">7</button>
                <button class="button" @click="press">8</button>
                <button class="button" @click="press">9</button>
                <button class="button" @click="press">*</button>
                <button class="button" @click="press">&#60;=</button>
                <button class="button" @click="press">C</button>
                <button class="button" @click="press">4</button>
                <button class="button" @click="press($event)">5</button>
                <button class="button" @click="press">6</button>
                <button class="button" @click="press">/</button>
                <button class="button" @click="press">(</button>
                <button class="button" @click="press">)</button>
                <button class="button" @click="press">1</button>
                <button class="button" @click="press">2</button>
                <button class="button" @click="press">3</button>
                <button class="button" @click="press">-</button>
                <button class="button" @click="press">x ²</button>
                <button class="button" @click="press">±</button>
                <button class="button" @click="press">0</button>
                <button class="button" @click="press">.</button>
                <button class="button" @click="press">%</button>
                <button class="button" @click="press">+</button>
                <button class="button equal-sign" @click="press">=</button>
            </div>
            <div class="mode" v-else>
                <button class="button" @click="press">sin</button>
                <button class="button" @click="press">cos</button>
                <button class="button" @click="press">tan</button>
                <button class="button" @click="press">x^</button>
                <button class="button" @click="press">&#60;=</button>
                <button class="button" @click="press">C</button>
                <button class="button" @click="press">log</button>
                <button class="button" @click="press">ln</button>
                <button class="button" @click="press">e</button>
                <button class="button" @click="press">∘</button>
                <button class="button" @click="press">rad</button>
                <button class="button" @click="press">√</button>
                <button class="button" @click="press">7</button>
                <button class="button" @click="press">8   </button>
                <button class="button" @click="press">9</button>
                <button class="button" @click="press">/</button>
                <button class="button" @click="press">x ²</button>
                <button class="button" @click="press">x !</button>
                <button class="button" @click="press">4</button>
                <button class="button" @click="press">5</button>
                <button class="button" @click="press">6</button>
                <button class="button" @click="press">*</button>
                <button class="button" @click="press">(</button>
                <button class="button" @click="press">)</button>
                <button class="button" @click="press">1</button>
                <button class="button" @click="press">2</button>
                <button class="button" @click="press">3</button>
                <button class="button" @click="press">-</button>
                <button class="button" @click="press">%</button>
                <button class="button" @click="press">±</button>
                <button class="button" @click="press">0</button>
                <button class="button" @click="press">.</button>
                <button class="button" @click="press">&#x003C0;</button>
                <button class="button" @click="press">+</button>
                <button class="button equal-sign" @click="press">=</button>
            </div>
        </div>
    </div>
<footer>
    <p>Copyright &copy; 2021 - Group 5 . TI-2F | All rights Reserved.</p>
</footer> 

<!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js'></script>
    <script src="script.js"></script>
</html>