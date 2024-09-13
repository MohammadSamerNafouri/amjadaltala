
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <center>
    <div style="width: 60%;align-content: center;font-size: 20px;margin-top: 30px;margin-bottom: 25px">
        <form action="<?php echo e(route('update_patient')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input name="id" value="<?php echo e($patient->id); ?>" type="hidden" class="form-control" aria-describedby="emailHelp" required>

            <div class="mb-3">
              <label class="form-label">Name</label>
              <input name="name" value="<?php echo e($patient->name); ?>" type="text" class="form-control" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
              <label  class="form-label">Email</label>
              <input name="email" value="<?php echo e($patient->email); ?>" type="email" class="form-control" id="exampleInputPassword1"required>
            </div>
            <div class="mb-3">
                <label  class="form-label">Address</label>
                <input name="address" value="<?php echo e($patient->address); ?>"  required type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label  class="form-label">Birth Date</label>
                <input name="age" value="<?php echo e($patient->age); ?>" required type="date" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label  class="form-label">Phone Number</label>
                <input name="phone" value="<?php echo e($patient->phone); ?>" required type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label  class="form-label">Permanent Medications</label>
                <textarea required name="permanent_medications"  cols="90" rows="5"><?php echo e($patient->permanent_medications); ?></textarea>
            </div>
            <button type="submit" class="btn btn-success">Update Patient</button>
          </form>
          <?php if($errors->any()): ?>
          <div class="alert alert-danger">
              <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </div>
      <?php endif; ?>
    </div>
</center>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>


<?php /**PATH C:\wamp64\www\raghad_project (2)\raghad_project (2)\raghad_project\resources\views/pages/edit_patient.blade.php ENDPATH**/ ?>