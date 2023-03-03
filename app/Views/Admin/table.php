<?= $this->extend("layout/admin") ?>

<?= $this->section("content") ?>
    <main>
        <div class="container-sm">
        <div style="margin-top: 50px">
            <table id="example" class="hover" style="width: 100%">
            <thead style="background-color: #923244; color: #fff">
                <tr>
                <th>Status</th>
                <th>Número de Folio</th>
                <th>Nombre</th>
                <th>CURP</th>
                <th>Fecha de Solicitud</th>
                <th>Municipio</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
                <td style="display: flex; justify-content: space-around">
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" ><i class="bi bi-search"></i></button>
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i></button>
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-x-circle"></i></button>
                    <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-printer"></i></button>
                </td>
                </tr>
                <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
                <td style="display: flex; justify-content: space-around">
                    <i class="bi bi-search"></i>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-x-circle"></i>
                    <i class="bi bi-printer"></i>
                </td>
                </tr>
                <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009-01-12</td>
                <td>$86,000</td>
                <td style="display: flex; justify-content: space-around">
                    <i class="bi bi-search"></i>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-x-circle"></i>
                    <i class="bi bi-printer"></i>
                </td>
                </tr>
                <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012-03-29</td>
                <td>$433,060</td>
                <td style="display: flex; justify-content: space-around">
                    <i class="bi bi-search"></i>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-x-circle"></i>
                    <i class="bi bi-printer"></i>
                </td>
                </tr>
                <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008-11-28</td>
                <td>$162,700</td>
                <td style="display: flex; justify-content: space-around">
                    <i class="bi bi-search"></i>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-x-circle"></i>
                    <i class="bi bi-printer"></i>
                </td>
                </tr>
                <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012-12-02</td>
                <td>$372,000</td>
                <td style="display: flex; justify-content: space-around">
                    <i class="bi bi-search"></i>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-x-circle"></i>
                    <i class="bi bi-printer"></i>
                </td>
                </tr>
                <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012-08-06</td>
                <td>$137,500</td>
                <td style="display: flex; justify-content: space-around">
                    <i class="bi bi-search"></i>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-x-circle"></i>
                    <i class="bi bi-printer"></i>
                </td>
                </tr>
                <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010-10-14</td>
                <td>$327,900</td>
                <td style="display: flex; justify-content: space-around">
                    <i class="bi bi-search"></i>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-x-circle"></i>
                    <i class="bi bi-printer"></i>
                </td>
                </tr>
                <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010-10-14</td>
                <td>$327,900</td>
                <td style="display: flex; justify-content: space-around">
                    <i class="bi bi-search"></i>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-x-circle"></i>
                    <i class="bi bi-printer"></i>
                </td>
                </tr>
                <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010-10-14</td>
                <td>$327,900</td>
                <td style="display: flex; justify-content: space-around">
                    <i class="bi bi-search"></i>
                    <i class="bi bi-pencil-square"></i>
                    <i class="bi bi-x-circle"></i>
                    <i class="bi bi-printer"></i>
                </td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </main>


    <!-- Modal details -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <label for="" class="col-form-label col-sm-3">CURP: </label>
                        <div class="col-sm-9">
                            <div class=" input-group d-flex has-validation">
                                <input type="text" name="" id="inpCurp" class="form-control col" aria-describedby="btn1" required>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-form-label col-sm-3">Nombre: </label>
                        <div class="col-sm-9">  
                            <input type="text" name="" id="inpName" class="form-control col">
                        </div>
                        
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-form-label col-sm-3">Apellido paterno: </label>
                        <div class="col-sm-9">
                            <input type="text" name="" id="inpFatherLastName" class="form-control col">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-form-label col-sm-3">Apellido materno: </label>
                        <div class="col-sm-9">
                            <input type="text" name="" id="inpMotherLastName" class="form-control col">
                        </div>
                        
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-form-label col-sm-3">Lugar de nacimiento: </label>
                        <div class="col">
                            <input type="text" name="" id="inpPalceBirth" class="form-control">
                        </div>
                        
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-form-label col-sm-3">Fecha de nacimiento:</label>
                        <div class="col">
                        <input type="date" name="" id="inpBirthDate" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-form-label col-sm-3">Municipio de residencia: </label>
                        <div class="col">
                            <select class="form-select" aria-label="Default select example" id="selResidence">
                                <option value="">Selecciona una opción</option>
                                <option value="Armería">Armería</option>
                                <option value="Colima">Colima</option>
                                <option value="Comala">Comala</option>
                                <option value="Coquimatlán">Coquimatlán</option>
                                <option value="Cuauhtémoc">Cuauhtémoc</option>
                                <option value="Ixtlahuacán">Ixtlahuacán</option>
                                <option value="Manzanillo">Manzanillo</option>
                                <option value="Minatitlán">Minatitlán</option>
                                <option value="Tecomán">Tecomán</option>
                                <option value="Villa de Álvarez">Villa de Álvarez</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="row mb-3">

                        <label for="inpEmail" class="col-form-label col-sm-3">Correo electronico:</label>
                        <div class="col has-validation">
                            <input type="email" name="" id="inpEmail" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inpCelular" class="col-form-label col-sm-3">Numero de celular:</label>
                        <div class="col">
                            <input type="text" name="" id="inpCellPhone" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-form-label col-sm-3">Nombre de padre o tutor:</label>
                        <div class="col ">
                            <input type="text" name="" id="inpGuardianName" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning">Save changes</button>
                </div>
            </div>
        </div>
    </div>

Static backdrop
<?= $this->endSection() ?>

<?= $this->section("scripts") ?>
    <script>
      $(document).ready(function () {
        $("#example").DataTable();
      });
    </script>

    <script src="<?=base_url()?>/assets/js/adminTable.js"></script>
<?= $this->endSection() ?>