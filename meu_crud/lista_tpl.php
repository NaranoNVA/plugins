<div class="wrap">

    <style>
        table,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>

    <h1>Meu Crud Lista</h1>

    <form method="post">


        <table>
            <tr>
                <td>Nome</td>
                <td>Whatsapp</td>
                <td></td>
            </tr>


            <?php
            foreach ($contatos as $key => $value) {

                echo "<tr> <td>{$value->nome}</td> <td>{$value->whatsapp}</td> 
                <td> <a href='?page={$_GET['page']}&apagar={$value->id}'>Apagar</a> </td> </tr>";
            }
            ?>

            <tr>
                <td> <input type="text" name="nome" placeholder="Nome"> </td>
                <td> <input type="text" name="whatsapp" placeholder="Whatsapps"> </td>
                <td> <?php submit_button('Gravar'); ?> </td>
            </tr>
        </table>

</div>