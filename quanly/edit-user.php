<?php
include('../layouts/header.php');
?>
<div class="flex flex-col gap-4">
    <h3 class="text-[23px]">Chỉnh sửa thông tin</h3>
    <form>
    <div class="border-b border-gray-900/10 pb-12">
    <div class="flex flex-col gap-2 pb-4">
        <h2 class="text-base/7 font-semibold text-gray-900">Thông tin cá nhân</h2>
        <p class="mt-1 text-sm/6 text-gray-600">Nhập thông tin cá nhân của bạn.</p>
    </div>

    <div class="flex flex-col gap-4">
        <div class="sm:col-span-3">
        <label for="first-name" class="block text-sm/6 font-medium text-gray-900">Tên đệm</label>
        <div class="mt-2">
            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
        </div>
        </div>

        <div class="sm:col-span-3">
        <label for="last-name" class="block text-sm/6 font-medium text-gray-900">Họ</label>
        <div class="mt-2">
            <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
        </div>
        </div>

        <div class="sm:col-span-4">
        <label for="email" class="block text-sm/6 font-medium text-gray-900">Số điện thoại</label>
        <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
        </div>
        </div>

        <div class="">
        <h3 class="font-20px font-bold pb-4" >Địa chỉ cá nhân</h3>
        <div class="col-span-full">
        <label for="street-address" class="block text-sm/6 font-medium text-gray-900">Xã</label>
        <div class="mt-2">
            <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
        </div>
        </div>

        <div class="sm:col-span-2 sm:col-start-1">
        <label for="city" class="block text-sm/6 font-medium text-gray-900">Huyện</label>
        <div class="mt-2">
            <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
        </div>
        </div>

        <div class="sm:col-span-2">
        <label for="region" class="block text-sm/6 font-medium text-gray-900">Tỉnh/Thành phố</label>
        <div class="mt-2">
            <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
        </div>
        </div>
    </div>
    <div class="sm:col-span-2 sm:col-start-1">
        <label for="city" class="block text-sm/6 font-medium text-gray-900">Quyền hạn (Người dùng, nhân viên, quản lý...)</label>
        <div class="mt-2">
        <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Người dùng</span>
        </div>
        </div>
    </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Xác nhận</button>
    </div>
</form>
</div>

<?php
include('../layouts/footer.php');
?>