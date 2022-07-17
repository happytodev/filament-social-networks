# Changelog

All notable changes to `filament-social-networks` will be documented in this file.

## v0.2.1-beta - 2022-07-17

- Fix image path problem (missing /)

## v0.2.0-beta - 2022-07-15

### Second beta

- This version is coming with a major change. The plugin will use repeater instead of classical forms. This allows you to order social networks in order you want just by drag and drop
- Now, you can now set one or more group of social network if you want. For example, you can set a group of 'video' networks with Twich, TikTok and Youtube and an another one with more traditionnal network like 'facebook', 'instagram', 'twitter' and place them in different places of your websites with associated blade components.
- Social networks could be collapsed, if you need place on your screen
- Blade component could be use attribute "name" to choose which of your social networks group you want to display (ex.: `<x-happytodev-filament-social-networks name="video"/>`)

## v0.2.0 - 2022-07-08

Second beta

- This version is coming with a major change. The plugin will use repeater instead of classical forms. This allows you to order social networks in order you want just by drag and drop
- Now, you can now set one or more group of social network if you want. For example, you can set a group of 'video' networks with Twich, TikTok and Youtube and an another one with more traditionnal network like 'facebook', 'instagram', 'twitter' and place them in different places of your websites with associated blade components.
- Social networks could be collapsed, if you need place on your screen
- Blade component could be use attribute "name" to choose whichn of your social networks group you want to display (ex.: `<x-happytodev-filament-social-networks name="video"/>`)

## v0.1.0 - 2022-06-30

First Beta version.

- Add searchable method to allow user to find quickly his favourite social network in the growing list
- Increase social networks to 21 by adding the following social networks :
- - DeviantArt
- - Discord
- - LinkedIn
- - Medium
- - Pinterest
- - Reddit
- - Skype
- - Snapchat
- - Soundcloud
- - Telegram
- - TikTok
- - Tumblr
- - Twitch
- - Vimeo
- - WattPad
- - WhatsApp
- 
- Add reactivity to the url field to propose to user a template adapted to the social network, when it's possible (WIP)

## v0.0.1 - 2022-06-27

First alpha version for this plugin.
Out of the box, you can add these social networks :

- Facebook
- Github
- Instagram
- Twitter
- Youtube

Main functionnalities :

- easy to install as Filament plugin (see below)
- possibility to use OrbitPHP or classical driver database
- possibility to add, edit, remove, list social networks
- social networks icons provided by default via svgporn
- possibility to add your custom icons if you want
- possibility to activate or not a social network
- by default link open in a new tab (target='_blank')
