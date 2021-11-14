# Botmaster - Telegram 

<ul style="list-style: none">
    <li> <b>Author</b> :  Naveen Kumar N </li>
    <li> <b>Platforms</b> : PHP </li>
</ul>

This is the Telegram integration for botmaster. It allows you to use your botmaster bot on Telegram.

# Procedures

Add <a href="https://t.me/botfather">t.me/botfather</a> to your Telegram contact

Type <b>/start</b> and tap send button and follow further steps mentioned

# Getting Started

Clone git repo : https://github.com/navinnv/telegram-bot.git

Extract files and replace the api and channel id

Start Hacks...

# How It Works

At the core, Telegram Bots are special accounts that do not require an additional phone number to set up. Users can interact with bots in two ways:

<ul>
    <li>
    Send messages and <a href="https://core.telegram.org/bots#commands">commands</a> to bots by opening a chat with them or by adding them to groups.
    </li>
    <li>
    Send requests directly from the input field by typing the bot's @username and a query. This allows sending content from <a href="https://core.telegram.org/bots/inline">inline bots</a> directly into any chat, group or channel.
    </li>
</ul>

Messages, commands and requests sent by users are passed to the software running on your servers. Our intermediary server handles all encryption and communication with the Telegram API for you. You communicate with this server via a simple HTTPS-interface that offers a simplified version of the Telegram API. We call that interface our Bot API.