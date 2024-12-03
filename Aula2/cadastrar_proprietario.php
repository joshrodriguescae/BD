<h1>Cadastrar Proprietarios</h1>

<form action="?page=salvar_modelos" method="post">
    <input type="hidden" name="acao" value="cadastrar">


   
    <div class="card" style="width: 30rem;">
        <div>
            <div class="container mb-3">
                <label class="mt-3">Proprietarios</label>
                <select name="proprietario_id_proprietario" class="form-control">
                    <option>Escolha</option>
                    <?php
                    $sql ="SELECT * FROM proprietario";
                    $res= $conn->query($sql);
                    if ($res->num_rows>0) {
                        while ($row= $res->fetch_object()) {
                            echo "<option value='".$row->proprietario_id_proprietario."'>".$row->nome_proprietario."</option>";
                        }
                    }else {
                        echo "<option> Não há proprietarios cadastrados</option>";
                    }

                    ?>
                </select>
                
            </div>
            <div class="container mb-3">
                <label class="mt-3">proprietario</label>
                <input type="text" name="nome_proprietario" class="form-control" placeholder="digite nome do proprietario">
            </div>
            <div class="container mb-3">
                <label class="mt-3">nascimento</label>
                <input type="text" name="nascimento_proprietario" class="form-control" placeholder="digite a data de nascimento do proprietario">
            </div>
            <div class="container mb-3">
                <label class="mt-3">email</label>
                <input type="text" name="email_proprietario" class="form-control" placeholder="digite o email do proprietario">
            </div>
            <div class="container mb-3">
                <label class="mt-3">cpf</label>
                <input type="text" name="cpf_proprietario" class="form-control" placeholder="digite o cpf do proprietario">
            </div>

            <div class="container mb-3">
                <button type="submit" class="btn btn-primary">Cadastrar proprietario</button>
            </div>

        
    </div>
</div>
</form>