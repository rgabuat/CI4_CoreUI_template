<div class="col-lg-12">
     <table id="account_table" class="table">
         <thead>
             <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>level</th>
                <th>Unique ID</th>
                <th>Status</th>
                <th>Actions</th>
             </tr>
         </thead>
         <tbody>
            <?php  
                if($param):
                foreach($param as $params):
            ?>
                <tr>
                    <td><?= $params['id'] ?></td>
                    <td><?= $params['username'] ?></td>
                    <td><?= $params['email'] ?></td>
                    <td><?= $params['level'] ?></td>
                    <td><?= $params['uniqueid'] ?></td>
                    <td><?= $params['status'] ?></td>
                    <td>
                        <a href="#"><i class="icon-note text-warning"></i></a>&nbsp;&nbsp;
                        <a href="#"><i class="icon-trash text-danger"></i></a>
                    </td>
                </tr>
            <?php 
                endforeach;
                else: ?>
                <tr>
                    <td>No Results</td>
                </tr>
            <?php endif; ?>
         </tbody>
     </table>
 </div>