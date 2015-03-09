<?php
namespace Community;

/**
 * Directory class
 *
 * This is a class allowing to manipulate data associated with people.
 * We identify people with their email address and store meta data such as
 * the Full name, other emails used, aliases to the name or languages that
 * he works with.
 *
 *
 * @package Community
 */
class Directory
{
    /*
        $people = [
            'john@doe.com' => [
                'name'         => 'John Doe',
                'locale'       => ['fr', 'de'],
                'other_emails' => ['john2@doe.com', 'john3@doe.org'],
                'other_names'  => ['Johnny Begood', 'John the great'],
            ],
        …etc…
        ];

    */
    public $people = [];

    /*
        A single array of data extracted from $people with the email as key
    */
    public $person = [];

    /**
     * Constructor
     *
     * @param  array $source An array of localizers
     * @return void
     */
    public function __construct($source)
    {
        $this->people = $source;
    }

    /**
     * Extract a single file associated into $this->person
     * If the email requested is not a primary email used as key
     * in $this->people, we check if it is not among secondary emails,
     * in that case we reset the email to the primary email for this account.
     *
     * @param  string  $email
     * @return boolean True if we have a match, False otherwise
     */
    public function setPerson($email)
    {
        if (isset($this->people[$email])) {
            $this->person = [$email => $this->people[$email]];

            return true;
        }

        foreach ($this->people as $key => $values) {
            if (isset($values['other_emails'])) {
                if (in_array($email, $values['other_emails'])) {
                    $this->person = [$key => $this->people[$key]];

                    return true;
                }
            }
        }

        // We don't have a match, we need to reset the person field
        $this->person = [];

        return false;
    }

    /**
     * Get the main locale that the person works on.
     *
     * @return string the locale code. Null if it is not defined in the source
     */
    public function getLocale()
    {
        if ($this->getKey('locale')) {
            return $this->getKey('locale')[0];
        }

        return;
    }

    /**
     * Get the Full name of the person
     *
     * @return string Name of the person or null
     */
    public function getName()
    {
        if ($this->getKey('name')) {
            return $this->getKey('name');
        }

        return;
    }

    /**
     * Get the main email used by the person. This is the email that we
     * use as the key identifying him.
     *
     * @return string email address
     */
    public function getEmail()
    {
        return key($this->person);
    }

    /**
     * Get all the emails that we associate with a person.
     * That includes the main email that we use as identifier.
     *
     * @return array List of email addresses
     */
    public function getAllEmails()
    {
        if ($this->getKey('other_emails')) {
            return array_unique(
                array_merge(
                    $this->getKey('other_emails'),
                    [$this->getEmail()]
                )
            );
        }

        return [key($this->person)];
    }

    /**
     * Get all the names and nicknames associated with this person.
     * This can allow having a long list of alternate names to identify
     * a person more precisely in VCS logs for example.
     *
     * @return array List of names used by the person
     */
    public function getAllNames()
    {
        if ($this->getKey('other_names')) {
            return array_unique(
                array_merge(
                    $this->getKey('other_names'),
                    [$this->getName()]
                )
            );
        }

        return [$this->getName()];
    }

    /**
     * Utility function to return a row for a person's file using the row id.
     *
     * @param  string $key Key identifing a row in the $person array
     * @return mixed  The data contained in this row, can be any type.
     */
    private function getKey($key)
    {
        return isset($this->person[key($this->person)][$key])
               ? $this->person[key($this->person)][$key]
               : false;
    }
}
