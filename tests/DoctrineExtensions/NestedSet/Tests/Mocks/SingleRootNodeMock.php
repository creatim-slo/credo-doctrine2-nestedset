<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL.
 */

namespace DoctrineExtensions\NestedSet\Tests\Mocks;

use DoctrineExtensions\NestedSet\Node;


/**
 * @Entity
 */
class SingleRootNodeMock implements Node
{
    public function __construct(
        /**
         * @Id @Column(type="integer")
         */
        private $id,
        /**
         * @Column(type="string", length="16")
         */
        private $name=null,
        /**
         * @Column(type="integer")
         */
        private $lft=null,
        /**
         * @Column(type="integer")
         */
        private $rgt=null
    )
    {
    }

    public function getId() { return $this->id; }

    public function getLeftValue() { return $this->lft; }
    public function setLeftValue($lft) { $this->lft = $lft; }

    public function getRightValue() { return $this->rgt; }
    public function setRightValue($rgt) { $this->rgt = $rgt; }

    public function getRootValue() { return null; }
    public function setRootValue($root) { }

    public function getName() { return $this->name; }
    public function setName($name) { $this->name = $name; }

    public function __toString(): string { return (string) $this->name; }
}
