
## telegramuser-fts
Get data from each user or telegram bots
## Installation

Recommended way of installing this is via [Composer](https://getcomposer.org/):

```bash
  composer require telegramuser-fts
```
## Usage/Examples
```javascript
include "./vendor/autoload.php";

$teleuser = new Telegram\Teleuser\Teleuser();
$data = $teleuser->Userdata("username");
print($data);
```

JSON
```json
{
    "user": "Telegram Usernames",
    "extra": "1 151 460 subscribers",
    "description": "This channel is managed by the Telegram team to inform users about updates\nrelated to auctions for usernames and other items on the Telegram platform.",
    "thumbnail": "https://cdn1.telegram-cdn.org/file/T341eQzprggN32ief5E7w96AVAvdftPmib0vax-k67yKwkGL2r9g3PMZ4L1y-s2Zw6HJaxNDIl8DWSQRUqItHSfBTKflRsOUC7GNbSt4UPWYttGQXPyS3rushCRQsg2q7LxUIziV6-ppnBgHIU6tXXRSEpeYzyR36wn0oLfVgqjEb4IUk9T4hQxLxKd9k_7F07xdTqWjtpKDdoujPqi0QZiI02NMSskwpZey0RWPiyEt_dFkB1Scev_AP2w1glwDdb3JnIk6-EQURig_Qx47YOpVQP4IF6PAjM93DZoJLP9HWhwmhyuJgaIX9NYyrm9k7DWZsEQGkY9GzT0esMYWhg.jpg",
    "ul": "https://t.me/username"
}
```
## API
Use the api doing telegramuser [click here](https://telegramuser.projectsrpp.repl.co/)

Developed by yandricr