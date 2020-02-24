<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Lof\HieuStudentManage\Api\Data;

/**
 * CMS block interface.
 * @api
 * @since 100.0.2
 */
interface StudentInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const STUDENT_ID = 'student_id';
    const NAME = 'name';
    const ADDRESS = 'address';
    const GENDER = 'gender';
    const DATEOFBIRTH = 'dataofbirth';
    const PHONENUMBER = 'phonenumber';
    /**#@-*/

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get identifier
     *
     * @return string
     */
    public function getName();

    /**
     * Get title
     *
     * @return string|null
     */
    public function getAddress();

    /**
     * Get content
     *
     * @return string|null
     */
    public function getGender();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getDateofbirth();

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getPhonenumber();
    
    /**
     * Set ID
     *
     * @param int $student_id
     * @return StudentInterface
     */
    public function setId($student_id);

    /**
     * Set identifier
     *
     * @param string $name
     * @return StudentInterface
     */
    public function setName($name);

    /**
     * Set title
     *
     * @param string $address
     * @return StudentInterface
     */
    public function setAddress($address);

    /**
     * Set content
     *
     * @param string $gender
     * @return StudentInterface
     */
    public function setGender($gender);

    /**
     * Set creation time
     *
     * @param string $dateofbirth
     * @return StudentInterface
     */
    public function setDateofbirth($dateofbirth);

    /**
     * Set update time
     *
     * @param string $phonenumber
     * @return StudentInterface
     */
    public function setPhonenumber($phonenumber);

}
