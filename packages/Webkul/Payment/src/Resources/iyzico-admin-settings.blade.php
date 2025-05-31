@php($config = core()->getConfigData('sales.payment_methods.iyzico'))

<div class="form-group">
    <label for="iyzico_api_key">Iyzico API Key</label>
    <input type="text" class="form-control" id="iyzico_api_key" name="iyzico_api_key" value="{{ $config['api_key'] ?? '' }}">
</div>
<div class="form-group">
    <label for="iyzico_secret_key">Iyzico Secret Key</label>
    <input type="text" class="form-control" id="iyzico_secret_key" name="iyzico_secret_key" value="{{ $config['secret_key'] ?? '' }}">
</div>
<div class="form-group">
    <label for="iyzico_sandbox">Sandbox Mode</label>
    <select class="form-control" id="iyzico_sandbox" name="iyzico_sandbox">
        <option value="1" {{ (isset($config['sandbox']) && $config['sandbox']) ? 'selected' : '' }}>Enabled</option>
        <option value="0" {{ (isset($config['sandbox']) && !$config['sandbox']) ? 'selected' : '' }}>Disabled</option>
    </select>
</div>
