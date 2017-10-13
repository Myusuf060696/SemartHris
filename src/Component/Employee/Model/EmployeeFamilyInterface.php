<?php

namespace KejawenLab\Application\SemartHris\Component\Employee\Model;

use KejawenLab\Application\SemartHris\Component\Address\Model\CityInterface;
use KejawenLab\Application\SemartHris\Component\Education\Model\EducationalInstituteInterface;
use KejawenLab\Application\SemartHris\Component\Education\Model\EducationTitleInterface;
use KejawenLab\Application\SemartHris\Component\Employee\FamilyRelation;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@kejawenlab.com>
 */
interface EmployeeFamilyInterface
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @return null|EmployeeInterface
     */
    public function getEmployee(): ? EmployeeInterface;

    /**
     * @param EmployeeInterface $employee
     */
    public function setEmployee(EmployeeInterface $employee = null): void;

    /**
     * @return string
     *
     * @see FamilyRelation
     */
    public function getRelationType(): string;

    /**
     * @return string
     */
    public function getFullName(): string;

    /**
     * @return null|CityInterface
     */
    public function getPlaceOfBirth(): ? CityInterface;

    /**
     * @param CityInterface $city
     */
    public function setPlaceOfBirth(CityInterface $city = null): void;

    /**
     * @return \DateTime
     */
    public function getDateOfBirth(): \DateTime;

    /**
     * @return null|EducationalInstituteInterface
     */
    public function getEducationalInstitute(): ? EducationalInstituteInterface;

    /**
     * @param EducationalInstituteInterface $educationalInstitute
     */
    public function setEducationalInstitute(EducationalInstituteInterface $educationalInstitute = null): void;

    /**
     * @return null|EducationTitleInterface
     */
    public function getEducationTitle(): ? EducationTitleInterface;

    /**
     * @param EducationTitleInterface $educationTitle
     */
    public function setEducationTitle(EducationTitleInterface $educationTitle = null): void;
}
