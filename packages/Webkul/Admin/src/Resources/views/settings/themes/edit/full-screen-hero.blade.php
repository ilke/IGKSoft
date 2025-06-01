<div class="box-shadow rounded bg-white p-4 dark:bg-gray-900">
    <div class="mb-2.5 flex items-center justify-between gap-x-2.5">
        <div class="flex flex-col gap-1">
            <p class="text-base font-semibold text-gray-800 dark:text-white">
                Tam Ekran Kahraman Bloğu Ayarları
            </p>
            <p class="text-xs font-medium text-gray-500 dark:text-gray-300">
                Ana sayfa için büyük başlık, alt başlık, arka plan görseli ve buton ayarlayın.
            </p>
        </div>
    </div>
    <div class="flex flex-col gap-4">
        <x-admin::form.control-group>
            <x-admin::form.control-group.label for="title" :label="'Başlık'" />
            <x-admin::form.control-group.control type="text" name="options[title]" :value="$theme->options['title'] ?? ''" />
        </x-admin::form.control-group>
        <x-admin::form.control-group>
            <x-admin::form.control-group.label for="subtitle" :label="'Alt Başlık'" />
            <x-admin::form.control-group.control type="text" name="options[subtitle]" :value="$theme->options['subtitle'] ?? ''" />
        </x-admin::form.control-group>
        <x-admin::form.control-group>
            <x-admin::form.control-group.label for="background_image" :label="'Arka Plan Görseli'" />
            <input type="file" name="background_image" accept="image/*" class="form-control" />
            @if (!empty($theme->options['background_image_url']))
                <div style="margin-top:10px;">
                    <img src="{{ asset('storage/' . $theme->options['background_image_url']) }}" alt="Arka Plan" style="max-width: 320px; border-radius: 8px;" />
                </div>
            @else
                <div style="margin-top:10px; width:320px; height:180px; background:#e0e0e0; border-radius:8px; display:flex; align-items:center; justify-content:center; color:#888; font-size:1.2rem;">Görsel Yok</div>
            @endif
        </x-admin::form.control-group>
        <x-admin::form.control-group>
            <x-admin::form.control-group.label for="button_text" :label="'Buton Metni'" />
            <x-admin::form.control-group.control type="text" name="options[button_text]" :value="$theme->options['button_text'] ?? ''" />
        </x-admin::form.control-group>
        <x-admin::form.control-group>
            <x-admin::form.control-group.label for="button_link" :label="'Buton Linki'" />
            <x-admin::form.control-group.control type="text" name="options[button_link]" :value="$theme->options['button_link'] ?? ''" />
        </x-admin::form.control-group>
    </div>
</div> 