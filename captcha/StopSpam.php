<?php
class StopSpam {
    /**
     * Ссылка на API Google капчи
     */
    const GOOGLE_API_URL = 'https://www.google.com/recaptcha/api/siteverify';

    /**
     * Ключ для API Google капчи
     */
    const GOOGLE_API_KEY = 'секретный_ключ_API_google';

    /**
     * Проверка e-mail на StopForumSpam.org
     *
     * @param string $email
     * @return bool
     * @throws Exception
     */
    public function checkSpamBot(string $email): bool
    {
        $apiUrl = 'http://api.stopforumspam.org/api';

        $response = [
            'email' => $email,
        ];

        $spamBot = false;

        $curl = curl_init($apiUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($response));
        $result = curl_exec($curl);
        curl_close($curl);

        $xml = new SimpleXMLElement($result);
        if ($xml->appears == 'yes') {
            $spamBot = true;
        }

        return $spamBot;
    }

    /**
     * Проверка сообщения на наличие ссылки
     *
     * @param string $message
     * @return bool
     */
    public function hasLink(string $message): bool
    {
        $hasLink = false;
        preg_match('/(http|https|mailto)/', $message, $matches);
        if (count($matches) > 0) {
            $hasLink = true;
        }

        return $hasLink;
    }

    /**
     * Проверка Google капчи
     *
     * @param string $response
     * @return mixed
     */
    public function checkGoogleCaptcha(string $response): mixed
    {
        $data = [
            'secret'   => self::GOOGLE_API_KEY,
            'response' => $response,
            'remoteip' => $_SERVER['REMOTE_ADDR'],
        ];

        $curl = curl_init(self::GOOGLE_API_URL);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        $result = json_decode(curl_exec($curl));
        curl_close($curl);

        return $result->success;
    }
}