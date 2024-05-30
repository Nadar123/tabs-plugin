# tabs-plugin

# Tabs Plugin for WordPress

This is a WordPress plugin that allows you to easily create and manage tabs in your posts and pages. you can add, edit, remove tabs. tabs available in options page in the WordPress admin panel

## Installation

1. Download the plugin files.
2. In your WordPress admin panel, go to Plugins > Add New.
3. Click "Upload Plugin" and select the plugin files you downloaded.
4. Click "Install Now".
5. After the plugin has been installed, click "Activate".
6. Navigate to the plugin root directory in your terminal.
7. Run `npm install` to install the necessary dependencies.
8. Run `npm start`. This will create a `dist` directory with a `main.js` file in the plugin directory.

Note: The `dist` directory and the `main.js` file are necessary for the plugin to work correctly.

After the plugin is activated, you can manage tabs in the plugin's options page in the WordPress admin panel.

## Usage

After the plugin is activated, you can create tabs in your posts and pages using the `[acf_tabs]` shortcode. Here's an example of how to use the shortcode in a PHP file:

```markdown
   <?php echo do_shortcode('[acf_tabs]');?>
```
