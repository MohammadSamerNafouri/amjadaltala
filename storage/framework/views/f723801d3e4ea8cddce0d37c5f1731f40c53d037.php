<?php if(count($doctors) >= 1 ): ?>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Phone Number</th>
        <th scope="col">specialization</th>
        <th scope="col">Actions</th>

      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($doctor->id); ?></td>

            <td><?php echo e($doctor->name); ?></td>
            <td><?php echo e($doctor->email); ?></td>
            <td><?php echo e($doctor->address); ?></td>
            <td><?php echo e($doctor->phone); ?></td>
            <td><?php echo e($doctor->specialization); ?></td>
            <td>
                <form action="<?php echo e(route('edit_doctor',$doctor->id)); ?>" >
                <button type="submit" class="btn btn-warning">Edit</button>
                </form>


            </td>
            <td>
                <form action="<?php echo e(route('destroy_doctor',$doctor->id)); ?>">
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>

          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
  </table>

<?php else: ?>
<center>
    <h1>
        No Doctors in Your data
    </h1>
</center>
<?php endif; ?>
<?php /**PATH C:\wamp64\www\raghad_project (2)\raghad_project (2)\raghad_project\resources\views/section/doctors_table.blade.php ENDPATH**/ ?>