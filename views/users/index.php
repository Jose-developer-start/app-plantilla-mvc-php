<?php
    include_once "./views/partials/header.php";
?>
    
<div class="container my-5">
    <h1 class="heading-3 text-center my-4">Registros de ejemplos</h1>
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h4>Agregar usuarios</h4>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="User">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-outline-success btn-block">Add user</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-8">
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>
                    <a class="btn btn-info" href="<?php echo URL ."/main/edit/".$user->id ?>"><i class="fas fa-user-edit"></i></a>
                    <a class="btn btn-danger" href="<?php echo URL ."/main/destroy/".$user->id ?>"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>
                    <a class="btn btn-info" href="<?php echo URL ."/main/edit/".$user->id ?>"><i class="fas fa-user-edit"></i></a>
                    <a class="btn btn-danger" href="<?php echo URL ."/main/destroy/".$user->id ?>"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            <td>
                    <a class="btn btn-info" href="<?php echo URL ."/main/edit/".$user->id ?>"><i class="fas fa-user-edit"></i></a>
                    <a class="btn btn-danger" href="<?php echo URL ."/main/destroy/".$user->id ?>"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
        </div>
    </div>

</div>
<?php
    include_once "./views/partials/footer.php";
?>