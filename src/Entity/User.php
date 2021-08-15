<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Exception;
use FOS\UserBundle\Model\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $first;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $last;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="bigint")
     */
    private $phone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirst(): ?string
    {
        return $this->first;
    }

    public function setFirst(string $first): self
    {
        $this->first = $first;

        return $this;
    }

    public function getLast(): ?string
    {
        return $this->last;
    }

    public function setLast(string $last): self
    {
        $this->last = $last;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function isAccountNonExpired()
    {
        // TODO: Implement isAccountNonExpired() method.
    }

    public function isAccountNonLocked()
    {
        // TODO: Implement isAccountNonLocked() method.
    }

    public function isCredentialsNonExpired()
    {
        // TODO: Implement isCredentialsNonExpired() method.
    }

    public function isEnabled()
    {
        // TODO: Implement isEnabled() method.
    }

    public function serialize()
    {
        // TODO: Implement serialize() method.
    }

    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
    }

    public function setSalt($salt)
    {
        // TODO: Implement setSalt() method.
    }

    public function setLastLogin(\DateTime $time = null)
    {
        // TODO: Implement setLastLogin() method.
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function setPlainPassword($password)
    {
        // TODO: Implement setPlainPassword() method.
    }

    public function isSuperAdmin()
    {
        // TODO: Implement isSuperAdmin() method.
    }

    public function getUsername()
    {
        // TODO: Implement getUsername() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function setUsername($username)
    {
        // TODO: Implement setUsername() method.
    }

    public function getUsernameCanonical()
    {
        // TODO: Implement getUsernameCanonical() method.
    }

    public function setUsernameCanonical($usernameCanonical)
    {
        // TODO: Implement setUsernameCanonical() method.
    }

    public function getEmailCanonical()
    {
        // TODO: Implement getEmailCanonical() method.
    }

    public function setEmailCanonical($emailCanonical)
    {
        // TODO: Implement setEmailCanonical() method.
    }

    public function getPlainPassword()
    {
        // TODO: Implement getPlainPassword() method.
    }

    public function setEnabled($boolean)
    {
        // TODO: Implement setEnabled() method.
    }

    public function setSuperAdmin($boolean)
    {
        // TODO: Implement setSuperAdmin() method.
    }

    public function getConfirmationToken()
    {
        // TODO: Implement getConfirmationToken() method.
    }

    public function setConfirmationToken($confirmationToken)
    {
        // TODO: Implement setConfirmationToken() method.
    }

    public function setPasswordRequestedAt(\DateTime $date = null)
    {
        // TODO: Implement setPasswordRequestedAt() method.
    }

    public function isPasswordRequestNonExpired($ttl)
    {
        // TODO: Implement isPasswordRequestNonExpired() method.
    }

    public function hasRole($role)
    {
        // TODO: Implement hasRole() method.
    }

    public function setRoles(array $roles)
    {
        // TODO: Implement setRoles() method.
    }

    public function getRoles()
    {
        // TODO: Implement getRoles() method.
    }

    public function addRole($role)
    {
        // TODO: Implement addRole() method.
    }

    public function removeRole($role)
    {
        // TODO: Implement removeRole() method.
    }
}
