<!-- Modal Overlay -->
<div id="modal-overlay" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 z-40"></div>

<!-- Modal -->
<div id="modal-login" class="hidden fixed inset-0 z-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
        <!-- Close Button -->
        <button id="close-login-modal" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800 text-2xl font-bold">
            &times;
        </button>

        <!-- Login Form -->
        <div class="w-full space-y-8">
            <div>
                <h2 class="text-center text-3xl font-extrabold text-slate-800">
                    Iniciar Sesión
                </h2>
            </div>

            <?php if(session('status')): ?>
                <div class="rounded-md bg-green-100 p-4">
                    <p class="text-sm text-green-700">
                        <?php echo e(session('status')); ?>

                    </p>
                </div>
            <?php endif; ?>

            <form class="mt-8 space-y-6" method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

                <div class="space-y-4">
                    <div>
                        <input 
                            id="email" 
                            name="email" 
                            type="email" 
                            autocomplete="email" 
                            required 
                            class="block w-full rounded-lg border border-gray-300 px-4 py-2 placeholder-gray-400 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" 
                            placeholder="Correo electrónico"
                            value="<?php echo e(old('email')); ?>"
                        >
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="mt-2 text-sm text-red-500"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div>
                        <input 
                            id="password" 
                            name="password" 
                            type="password" 
                            autocomplete="current-password" 
                            required 
                            class="block w-full rounded-lg border border-gray-300 px-4 py-2 placeholder-gray-400 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" 
                            placeholder="Contraseña"
                        >
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="mt-2 text-sm text-red-500"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input 
                            id="remember" 
                            name="remember" 
                            type="checkbox" 
                            class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                        >
                        <label for="remember" class="ml-2 block text-sm text-gray-900">
                            Recordarme
                        </label>
                    </div>

                    <div class="text-sm">
                        <?php if(Route::has('password.request')): ?>
                            <a href="<?php echo e(route('password.request')); ?>" class="font-medium text-slate-600 hover:text-slate-900">
                                ¿Olvidaste tu contraseña?
                            </a>
                        <?php endif; ?>
                    </div>
                </div>

                <div>
                    <button  
                        type="submit" 
                        class="mt-4 w-full rounded-lg bg-slate-800 py-2 text-white font-medium hover:bg-slate-950 focus:ring-2 focus:ring-slate-900 focus:ring-offset-2">
                        Iniciar Sesión
                    </>
                </div>
            </form>

            <!-- Nueva sección para registro -->
            <div class="mt-6 text-center border-t border-gray-200 pt-6">
                <p class="text-sm text-gray-600">
                    ¿No tienes una cuenta?
                    <a href="#" id="open-register-from-login" class="font-medium text-slate-800 hover:text-slate-900 ml-1">
                        Regístrate aquí
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/html/resources/views/auth/login.blade.php ENDPATH**/ ?>