<?php if(count($patients) >= 1 ): ?>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Age</th>
        <th scope="col">Phone Number</th>

        <th scope="col">Permanent Medications</th>
        <th scope="col">Actions</th>

      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($patient->id); ?></td>

            <td><?php echo e($patient->name); ?></td>
            <td><?php echo e($patient->email); ?></td>
            <td><?php echo e($patient->address); ?></td>
            <td><?php echo e($patient->age); ?></td>
            <td><?php echo e($patient->phone); ?></td>
            <td><?php echo e($patient->permanent_medications); ?></td>
            <td>
                <form action="<?php echo e(route('edit_patient',$patient->id)); ?>" >
                <button type="submit" class="btn btn-warning">Edit</button>
                </form>

            </td>
            <td>
                <form action="<?php echo e(route('destroy_patient',$patient->id)); ?>">
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
        No Patient in Your data
    </h1>
</center>
<?php endif; ?>
<?php /**PATH C:\Users\dell\OneDrive\Desktop\raghad_project (2)\raghad_project\resources\views/section/patient_table.blade.php ENDPATH**/ ?>