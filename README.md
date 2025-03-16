# FilamentPHP DashStack Theme

![GitHub License](https://img.shields.io/github/license/Fa-BRAIK/dash-stack-theme-juniyasyos)
![Packagist Version](https://img.shields.io/packagist/v/juniyasyos/dash-stack-theme-juniyasyos)
![PhpStan Level](https://img.shields.io/badge/PHPStan-level%207-brightgreen.svg)
[![PHPStan](https://github.com/Fa-BRAIK/dash-stack-theme/actions/workflows/phpstan.yml/badge.svg)](https://github.com/Fa-BRAIK/dash-stack-theme/actions/workflows/phpstan.yml)
[![Laravel Pint](https://github.com/Fa-BRAIK/dash-stack-theme/actions/workflows/pint.yml/badge.svg)](https://github.com/Fa-BRAIK/dash-stack-theme/actions/workflows/pint.yml)
[![PHPUnit](https://github.com/Fa-BRAIK/dash-stack-theme/actions/workflows/pr-tests.yml/badge.svg)](https://github.com/Fa-BRAIK/dash-stack-theme/actions/workflows/pr-tests.yml)

![Dash Stack Theme Light/Dark](https://github.com/Fa-BRAIK/dash-stack-theme/blob/main/assets/dash_stack_theme.png?raw=true)

> Tested on [Filamentphp demo app](https://github.com/filamentphp/demo)

## Acknowledgements

> Name based and Design inspired from [DashStack Theme](https://www.figma.com/community/file/1324762163080748317/dashstack-free-admin-dashboard-ui-kit-admin-dashboard-ui-kit-admin-dashboard). Big thanks for [Seju](https://www.figma.com/@sejal_ui_ux) for this amazing design.

---

## 🚀 Installation & Usage (Auto Mode)

### **Step 1: Install the Package**
Install the package using Composer:

```bash
composer require juniyasyos/dash-stack-theme-juniyasyos
```

### **Step 2: Run Install Command**
This command will install required npm packages (if not already installed) and publish its assets.

```bash
php artisan filament-dash-stack-theme-juniyasyos:install
```

### **Step 3: Register Filament Plugin**
Within your targeted panel provider, register DashStack Theme Plugin:

```php
use Juniyasyos\DashStackTheme\DashStackThemePlugin;

// ...

$panel->plugin(DashStackThemePlugin::make());
```

---

## 🔧 Development Mode

### **Step 1: Publish Assets Manually**
Run the following commands to publish the assets:

```bash
php artisan vendor:publish --tag=dash-stack-theme-juniyasyos-assets --force
php artisan vendor:publish --tag=dash-stack-theme-juniyasyos-dist --force
```

### **Step 2: Configure Vite Theme in Filament Panel**
Modify your **Filament Panel** configuration and set the `viteTheme` path to:

```php
->viteTheme('resources/css/filament/dash-stack-theme-juniyasyos/theme.css')
```

### **Step 3: Build the Assets**
After making any modifications, run the following command to compile the assets:

```bash
npm run build
```

### **Development Notes**
- Ensure that `vite.config.js` includes the correct input path for the theme CSS.
- After publishing assets, you may need to clear the cache using `php artisan config:clear`.
- If the styles are not reflecting, check if `npm run dev` or `npm run build` has been executed properly.

---

## ⚙️ Configuration

DashStack theme comes by default with a configuration for primary color and predefined dashboard settings. To customize, publish the config file:

```bash
php artisan vendor:publish --tag=filament-dash-stack-theme-juniyasyos-config
```

Example configuration (`config/filament-dash-stack-theme-juniyasyos.php`):

```php
use Juniyasyos\DashStackTheme\Support\Colors\Color;

return [
    'default-colors' => [
        'primary' => Color::Blue,
    ],

    'side-bar-collapsable-on-desktop' => true,
    'collapsible-navigation-groups' => false,
    'breadcrumbs' => false,

    /**
     * Nunito Sans is the default font for the theme.
     */
    'use-default-font' => true,
];
```

> **Note:** The default font used for Dash Stack Theme is Nunito Sans. You can disable this by setting `use-default-font` to `false` in the config file.

---

## 📌 Upcoming Features

If you have feature requests or suggestions, feel free to submit them on [GitHub](https://github.com/Fa-BRAIK/dash-stack-theme/issues).

#### Planned Updates:
- Date / DateTime / DateRange component
- Enhanced Select component (UI improvements)

---

## 🎨 Appearance

- [Login Page](#login-page)
- [Dashboard](#dashboard-page)
- [Global Search](#global-search)
- [Notifications](#notification-modal)
- [User Menu](#user-menu)
- [Resource Page](#resource-page)
- [Grid Table](#grid-table)
- [Forms](#forms)


#### Login Page

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Login Page Light</th>
      <th scope="col" width="1000px">Login Page Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/login_page_light.png"
            width="100%" 
            alt="Login Page Light"
        />
      </td>
      <td>
        <img 
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/login_page_dark.png" 
            width="100%" 
            alt="Login Page Dark"
        />
      </td>
    </tr>
  </tbody>
</table>

#### Dashboard Page

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Dashboard Page Light</th>
      <th scope="col" width="1000px">Dashboard Page Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/dashboard_page_light.png"
            width="100%" 
            alt="Dashboard Page Light"
        />
      </td>
      <td>
        <img 
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/dashboard_page_dark.png" 
            width="100%" 
            alt="Dashboard Page Dark"
        />
      </td>
    </tr>
  </tbody>
</table>

#### Global Search

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Global Search Light</th>
      <th scope="col" width="1000px">Global Search Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/global_search_light.png"
            width="100%" 
            alt="Global Search Light"
        />
      </td>
      <td>
        <img 
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/global_search_dark.png" 
            width="100%" 
            alt="Global Search Dark"
        />
      </td>
    </tr>
  </tbody>
</table>

#### Notification Modal

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Notification Modal Light</th>
      <th scope="col" width="1000px">Notification Modal Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/notification_modal_light.png"
            width="100%" 
            alt="Notification Modal Light"
        />
      </td>
      <td>
        <img 
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/notification_modal_dark.png" 
            width="100%" 
            alt="Notification Modal Dark"
        />
      </td>
    </tr>
  </tbody>
</table>

#### User Menu

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">User Menu Light</th>
      <th scope="col" width="1000px">User Menu Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/user_menu_light.png"
            width="100%" 
            alt="User Menu Light"
        />
      </td>
      <td>
        <img 
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/user_menu_dark.png" 
            width="100%" 
            alt="User Menu Dark"
        />
      </td>
    </tr>
  </tbody>
</table>

#### Resource Page

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Resource Page Light</th>
      <th scope="col" width="1000px">Resource Page Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/resources_page_light.png"
            width="100%" 
            alt="Resource Page Light"
        />
      </td>
      <td>
        <img 
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/resources_page_dark.png" 
            width="100%" 
            alt="Resource Page Dark"
        />
      </td>
    </tr>
  </tbody>
</table>

#### Grid Table

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Grid Table Light</th>
      <th scope="col" width="1000px">Grid Table Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/grid_table_light.png"
            width="100%" 
            alt="Grid Table Light"
        />
      </td>
      <td>
        <img 
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/grid_table_dark.png" 
            width="100%" 
            alt="Grid Table Dark"
        />
      </td>
    </tr>
  </tbody>
</table>

#### Forms

<table class="table">
  <thead>
    <tr>
      <th scope="col" width="1000px">Forms Light</th>
      <th scope="col" width="1000px">Forms Dark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <img
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/form_light.png"
            width="100%" 
            alt="Forms Light"
        />
      </td>
      <td>
        <img 
            src="https://raw.githubusercontent.com/Fa-BRAIK/dash-stack-theme/main/assets/screenshots/form_dark.png" 
            width="100%" 
            alt="Forms Dark"
        />
      </td>
    </tr>
  </tbody>
</table>
