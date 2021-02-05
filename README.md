## payright-woocommerce

PayRight payment method plugin for WooCommerce, follow the steps below for 
configuration setup and installation.

### 1.1 Installation
This section outlines the steps to install the Payright plugin for the first time.

#### Requirements
+ Access Token - A 'sandbox access token', or 'production access token'.

#### How to install

1. Download the 'payright-woocommerce' plugin.
2. Navigate to the "Add New" in the plugins dashboard.
2. Navigate to the "Upload" area.
3. Select the 'payright-woocommerce' .zip file from your computer.
4. Click "Install Now".
5. Activate the plugin in the 'Plugin' dashboard.

### 1.2	WooCommerce Configuration
Payright operates under assumptions based on Wordpress configurations. To align with these assumptions, the Wordpress configurations must reflect the below.

1. Store 'Country' set to 'Australia'.
2. Website 'Currency' must be set to 'AUD'.
3. WooCommerce installed.

### 1.3	Payright Plugin 

#### Primary Configuration
Complete the below steps to configure your Payright plugin:

1. Go to plugins page and click 'Configure'.
2. Enter the 'Access Token'.
3. Check 'Enable Payright' checkbox.
4. Set the Payright plugin mode, toggling the 'Enable Sandbox Mode' checkbox:
    + Check 'Enable Sandbox Mode' for testing on a staging instance.
    + Uncheck 'Enable Sandbox Mode' for a live store and legitimate transactions.
5. Click 'Save Changes'.

#### Secondary Configurations

1. Navigate to WooCommerce > Settings > Payments.
2. 'Enable Payright' and click on the 'Manage' button under 'Payment' for Payright.
3. Configure the display of the Payright installments details on:
    + Product Pages (Recommended)
    + Catalogue Pages (Recommended)
    + Related Products (Optional)
    + Front Page (Optional)
3. Enter a 'Minimum Amount' to display the installments.
