<?php $this->layout("layouts/home/home_layout", ["title" => APPNAME]) ?>
<?php $this->start("page") ?>
<div class="container">
    <section id="inner" class="inner-section section">
            <!-- SECTION HEADING -->
            <h2 class="section-heading text-center wow fadeIn" data-wow-duration="1s">User</h2>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p class="wow fadeIn" data-wow-duration="2s">View your all Users here.</p>
                </div>
            </div>

            <div class="inner-wrapper row">
                <div class="col-md-12 offset-3">
                
                    <!-- FLASH MESSAGES HERE -->
                    <a href="/contacts/add" class="btn btn-primary" style="margin-bottom: 30px;">
                        <i class="fa fa-plus"></i> New User</a>

                    <!-- <a href="/contacts/add" class="btn btn-primary" style="margin-bottom: 30px;">
                        <i class="fa fa-plus"></i> New Contact</a> -->
                    
                    <!-- Table Starts Here -->
                    <table id="table_user" class="table table-bordered table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>Account ID</th>
                                <th>User ID</th>
                                <th>User Email</th>
                                <th>User Name</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                    use App\Models\Account;
                    $AccountID_User = Account::leftJoin('user', 'account.UserID', '=', 'user.UserID')->get();
                    foreach ($AccountID_User as $account): ?>
                    <tr>
                    <td><?=$this->e($account->AccountId)?></td>
                    <td><?=$this->e($account->UserID)?></td>
                    <td><?=$this->e($account->UserEmail)?></td>
                    <td><?=$this->e($account->UserName)?></td>
                    <td><a href="/contacts/edit/" 
                    class="btn btn-xs btn-warning">
                    <i alt="Edit" class="fa fa-pencil"> Edit</i></a>
                        <form class="delete" action="/contacts/delete/" method="POST" style="display: inline;">
                         <button type="submit" class="btn btn-xs btn-danger" name="delete-contact">
           	                <i alt="Delete" class="fa fa-trash"> Delete</i>
                        </button>
                        </form></td>
                    </tr>
                    <?php endforeach ?>
                        </tbody>
                    </table>
                    <!-- Table Ends Here -->
                </div>
            </div>
    </section>
</div>
<?php $this->stop() ?>
