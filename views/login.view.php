<div class="mt-6 grid grid-cols-2 gap-2">
  <div class="border border-stone-700 rounded p-4">
    <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">
      Login
    </h1>
    <form class="p-4 space-y-4" method="post" action="<?= url('login') ?>">

      <?php if ($validations = flash()->get('validations_login')): ?>
        <div class="border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded-md border-2 text-sm font-bold">
          <ul>
            <li>Please fix the following errors:</li>
            <?php foreach ($validations as $validation): ?>
              <li><?= $validation ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>

      <div class="flex flex-col">
        <label class="text-stone-400 ml-2 mb-1" for="email-id">Email</label>
        <input id="email-id" type="email" value="<?= htmlspecialchars($_GET['email '] ?? '') ?>" name="email"
          class="border-2 rounded-md border-stone-600 bg-stone-900 focus:outline-none px-2 py-1 w-full"
          placeholder="Email" name="email" required />
        <label class="text-stone-400 ml-2 mb-1" for="password-id">Password</label>
        <input id="password-id" type="password" value="<?= htmlspecialchars($_GET['password '] ?? '') ?>"
          name="password" class="border-2 rounded-md border-stone-600 bg-stone-900 focus:outline-none px-2 py-1 w-full"
          placeholder="Password" name="password" required />
      </div>
      <button type="submit"
        class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-2 rounded-md border border-2 hover:bg-stone-800">Login</button>
    </form>
  </div>
  <div>
    <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">
      Register
    </h1>
    <form class="p-4 space-y-4" method="post" action="<?= url('register') ?>">

      <?php if ($validations = flash()->get('validations_register')): ?>
        <div class="border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded-md border-2 text-sm font-bold">
          <ul>
            <li>Please fix the following errors:</li>
            <?php foreach ($validations as $validation): ?>
              <li><?= $validation ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endif; ?>
      <div class="flex flex-col">
        <label class="text-stone-400 ml-2 mb-1" for="name-id">Name</label>
        <input id="name-id" type="text" value="<?= htmlspecialchars($_GET['name'] ?? '') ?>" name="name"
          class="border-2 rounded-md border-stone-600 bg-stone-900 focus:outline-none px-2 py-1 w-full"
          placeholder="Name" required />
        <label class="text-stone-400 ml-2 mb-1" for="email-id">Email</label>
        <input id="email-id" type="email" value="<?= htmlspecialchars($_GET['email'] ?? '') ?>" name="email"
          class="border-2 rounded-md border-stone-600 bg-stone-900 focus:outline-none px-2 py-1 w-full"
          placeholder="Email" required />
        <label class="text-stone-400 ml-2 mb-1" for="password-id">Password</label>
        <input id="password-id" type="password" value="<?= htmlspecialchars($_GET['password'] ?? '') ?>"
          name="password" class="border-2 rounded-md border-stone-600 bg-stone-900 focus:outline-none px-2 py-1 w-full"
          placeholder="Password" required />
        <label class="text-stone-400 ml-2 mb-1" for="password_confirmation-id">Confirm your Password</label>
        <input id="password_confirmation-id" type="password" value="<?= htmlspecialchars($_GET['password_confirmation'] ?? '') ?>"
          name="password_confirmation" class="border-2 rounded-md border-stone-600 bg-stone-900 focus:outline-none px-2 py-1 w-full"
          placeholder="Password" required />
      </div>
      <button type="reset"
        class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-2 rounded-md border border-2 hover:bg-stone-800">Cancel</button>
      <button type="submit"
        class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-2 rounded-md border border-2 hover:bg-stone-800">Register</button>
    </form>
  </div>

</div>