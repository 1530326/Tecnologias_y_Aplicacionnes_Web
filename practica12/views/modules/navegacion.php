<ul class="sidebar-menu" data-widget="tree"> 
  <li class="header">MAIN NAVIGATION</li>
    <?php if($_SESSION["tipo"]=="admin"){ ?>
        <li class="active"><a href="index.php?action=dashboardAdmin"><i class="fa fa-circle-o"></i> Dashboard</a></li>
        <li class="treeview">
          <a href="#">
            <i class="ion-android-contact"></i> <span>Tiendas</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?action=mostrarTiendas"><i class="fa fa-circle-o"></i> Ver tiendas</a></li>
            <li><a href="index.php?action=agregarTienda"><i class="fa fa-circle-o"></i> Agregar</a></li>
          </ul>
        </li>
    <?php }else{ ?>
    <li class="active"><a href="index.php?action=dashboard"><i class="fa fa-circle-o"></i> Dashboard</a></li>
    <li class="">
      <a href="index.php?action=mostrarUsuarios">
        <i class="ion-android-contact"></i> <span>Usuarios</span>
      </a>
    </li>
    <li class="">
      <a href="index.php?action=mostrarCategorias">
        <i class="ion-android-folder-open"></i> <span>Categorías</span>
      </a>
    </li>
    <li class="">
      <a href="index.php?action=mostrarProductos">
        <i class="ion-bag"></i> <span>Productos</span>
      </a>
    </li>
    <li class="">
      <a href="index.php?action=mostrarVentas">
        <i class="ion ion-ios-cart-outline"></i> <span>Ventas</span>
      </a>
    </li>
  <?php } ?>
  </ul>