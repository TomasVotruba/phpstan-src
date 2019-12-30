<?php declare(strict_types = 1);

namespace PHPStan\Reflection\BetterReflection\SourceLocator;

use Roave\BetterReflection\SourceLocator\Located\LocatedSource;

class FetchedNodesResult
{

	/** @var array<string, FetchedNode<\PhpParser\Node\Stmt\ClassLike>> */
	private $classNodes;

	/** @var array<string, FetchedNode<\PhpParser\Node\Stmt\Function_>> */
	private $functionNodes;

	/** @var array<string, FetchedNode<\PhpParser\Node\Const_|\PhpParser\Node\Expr\FuncCall>> */
	private $constantNodes;

	/** @var \Roave\BetterReflection\SourceLocator\Located\LocatedSource */
	private $locatedSource;

	/**
	 * @param array<string, FetchedNode<\PhpParser\Node\Stmt\ClassLike>> $classNodes
	 * @param array<string, FetchedNode<\PhpParser\Node\Stmt\Function_>> $functionNodes
	 * @param array<string, FetchedNode<\PhpParser\Node\Const_|\PhpParser\Node\Expr\FuncCall>> $constantNodes
	 * @param \Roave\BetterReflection\SourceLocator\Located\LocatedSource $locatedSource
	 */
	public function __construct(
		array $classNodes,
		array $functionNodes,
		array $constantNodes,
		LocatedSource $locatedSource
	)
	{
		$this->classNodes = $classNodes;
		$this->functionNodes = $functionNodes;
		$this->constantNodes = $constantNodes;
		$this->locatedSource = $locatedSource;
	}

	/**
	 * @return array<string, FetchedNode<\PhpParser\Node\Stmt\ClassLike>>
	 */
	public function getClassNodes(): array
	{
		return $this->classNodes;
	}

	/**
	 * @return array<string, FetchedNode<\PhpParser\Node\Stmt\Function_>>
	 */
	public function getFunctionNodes(): array
	{
		return $this->functionNodes;
	}

	/**
	 * @return array<string, FetchedNode<\PhpParser\Node\Const_|\PhpParser\Node\Expr\FuncCall>>
	 */
	public function getConstantNodes(): array
	{
		return $this->constantNodes;
	}

	public function getLocatedSource(): LocatedSource
	{
		return $this->locatedSource;
	}

}