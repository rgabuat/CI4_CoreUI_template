
<div class="col-lg-12 ">
     <div class="card text-white bg-warning">
         <div class="card-body">
            <h1>Welcome <span><?= $_SESSION['username'];?></span> </h1>
            <span><?= isset($_SESSION['role']) && ($_SESSION['role'] == 1) ? 'Admin' : 'User'; ?></span>
             <!-- <div class="btn-group float-right">
                 <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="icon-settings"></i>
                 </button>
                 <div class="dropdown-menu dropdown-menu-right">
                     <a class="dropdown-item" href="#">Action</a>
                     <a class="dropdown-item" href="#">Another action</a>
                     <a class="dropdown-item" href="#">Something else here</a>
                 </div>
             </div> -->
             <!-- <div>Members online</div> -->
         </div>
         <!-- <div class="chart-wrapper mt-3" style="height:70px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
             <canvas class="chart chartjs-render-monitor" id="card-chart3" height="140" style="display: block; height: 70px; width: 194px;" width="388"></canvas>
         </div> -->
     </div>
 </div>
