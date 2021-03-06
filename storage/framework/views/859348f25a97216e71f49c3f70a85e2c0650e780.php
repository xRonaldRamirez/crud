 
<?php $__env->startSection('content'); ?>

 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Listado de productos
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i>Inicio</li>
            <li class="active">Listado de productos</li>
          </ol>
        </section>

<?php echo $__env->make('products.fragment.info', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Listado de productos</h3>
                </div><!-- /.box-header -->
                <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary"> crear productos</a><br>
<div class="box-header">
	<?php echo $__env->make('products.fragment.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<table id="example2" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>id</th>
			<th>Nombre del producto</th>
			<th colspan="3">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($product->id); ?></td>
			<td><?php echo e($product->name); ?></td>
			<td>
		<a href="<?php echo e(route('products.show', $product->id)); ?>"> ver</a>
			</td>
			<td><a href="<?php echo e(route('products.edit', $product->id)); ?>"> editar</a></td>

			<td><form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST">
				<?php echo e(csrf_field()); ?>

				<input type="hidden" name="_method" value="DELETE">
				<button>eliminar</button>
			</form></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
	 
</table>
<?php echo $products->render(); ?>					
						
					</section>
				</div>
			</div>
		</div>
	</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>